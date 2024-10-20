<?php

namespace App\Http\Controllers;

use App\Models\Sku;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Order;
use App\Models\Slider;
use App\Models\Wallet;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\SkuVariant;
use App\Models\SubCategory;
use App\Models\Transaction;
use App\Models\VariantValue;
use Illuminate\Http\Request;
use App\Models\ProductComment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders =   Slider::all();

        $categories =
           Category::all()->where('status', '=', 'published');

        $number = [
            '1' => 'one',
            '2' => 'two',
            '3' => 'three',
            '4' => 'four',
            '5' => 'five',
            '6' => 'six',
        ];
        $products =
              Product::join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'sub_categories.name as sub_category_name')
            ->limit(12)
            ->orderBy('products.id', 'asc')
            ->get();


        foreach ($products as $product) {
            $skus =
                   SKU::where('product_id', $product->id)->get();
                $totalQuantity = $skus->sum('quantity');
                $product->total_quantity = $totalQuantity;

        }

        foreach ($products as $product) {
            $product->image_url = $product->productImages()
                ->orderBy('id', 'ASC')
                ->first()->image ?? null;
        }
        $productss =
             Product::join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'sub_categories.name as sub_category_name')

            ->orderBy('products.id', 'asc')
            ->get();


        foreach ($productss as $product) {
            $skus =
                    SKU::where('product_id', $product->id)->get();
                $totalQuantity = $skus->sum('quantity');
                $product->total_quantity = $totalQuantity;

        }

        foreach ($productss as $product) {
            $product->image_url = $product->productImages()
                ->orderBy('id', 'ASC')
                ->first()->image ?? null;
        }
        // Wallet balance
        $userId = Auth::id();
        if ($userId) {
            $wallet = Wallet::where('user_id', $userId)->first();

            $transactions = Transaction::where('wallet_id', $wallet->id)
                ->where('status', 'complete')
                ->get();

            $totalAmount = $transactions->sum('amount');

            $wallet->balance = $totalAmount;
            $wallet->save();

            Session::put('wallet', $totalAmount);
        }else {
            Session::put('wallet', 0);
        }

        //advertisement
        $product = Product::find(151);

        if (!$product) {
            // Xử lý khi không tìm thấy sản phẩm
            abort(404);
        }
        //breadcrumb


        $images = $product->productImages()->get();



        $totalQuantity = 0;



        // Tính tổng số sao trung bình




 $product_quantity =
       Sku::select(DB::raw('SUM(quantity) as total_quantity'))
    ->where('product_id',  $product->id)

    ->get();


    $userId = Auth::id();
    $relatedProduct=[];
    // Lấy đơn hàng mới nhất của user
    $latestOrder = Order::where('user_id', $userId)
        ->orderBy('created_at', 'DESC')
        ->first();

    if ($latestOrder) {
        // Lấy sản phẩm mới nhất từ đơn hàng
        $latestOrderItem = OrderItem::where('order_id', $latestOrder->id)
            ->orderBy('created_at', 'DESC')
            ->first();

        if ($latestOrderItem) {
            // Lấy subcategory của sản phẩm mới nhất mà user đã mua
            $product = Product::find($latestOrderItem->product_id);
            if ($product) {
                $subCategoryId = $product->sub_category_id;

                // Lấy các sản phẩm liên quan cùng subcategory, ngoại trừ sản phẩm đã mua
                $relatedProducts = Product::where('sub_category_id', $subCategoryId)
                    ->where('id', '!=', $product->id) // Loại trừ sản phẩm đã mua
                    ->with('productImages') // Lấy hình ảnh sản phẩm
                    ->get();

                // Tính tổng số lượng và thêm URL hình ảnh cho từng sản phẩm liên quan
                foreach ($relatedProducts as $relatedProduct) {
                    $relatedProduct->total_quantity = 100; // Hoặc giá trị thực tế nếu có
                    $relatedProduct->image_url = $relatedProduct->productImages->first()->image ?? null;
                }
            }
        }
    } else {
        $relatedProducts = collect(); // Không có sản phẩm nào đã mua
    }
    $relatedProducts = $relatedProducts ?? [];

        return view('home', compact('sliders', 'number', 'categories', 'products', 'productss', 'product', 'product_quantity', 'images', 'relatedProducts'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function showCategories($category_slug)
    {
        $categories = Category::with(['sub_categories.products'])
            ->where('status', 'published')
            ->get();

        foreach ($categories as $category) {
            $totalCategoryProducts = 0;
            $subCategoriesWithProductCount = [];

            foreach ($category->sub_categories as $subCategory) {
                $productCount = $subCategory->products->count();
                $totalCategoryProducts += $productCount;

                $subCategoriesWithProductCount[] = [
                    'subCategory' => $subCategory,
                    'productCount' => $productCount,
                ];
            }

            $category->subCategoriesWithProductCount = $subCategoriesWithProductCount;
            $category->totalProducts = $totalCategoryProducts;
        }

        //current category
        $currentCategory = Category::with(['sub_categories.products'])
            ->where('status', 'published')
            ->where('slug', $category_slug)
            ->get();

        foreach ($currentCategory as $currentCate) {
            $totalCategoryProducts = 0;
            $subCategoriesWithProductCount = [];

            foreach ($currentCate->sub_categories as $subCategory) {
                $productCount = $subCategory->products->count();
                $totalCategoryProducts += $productCount;

                $subCategoriesWithProductCount[] = [
                    'subCategory' => $subCategory,
                    'productCount' => $productCount,
                ];
            }
            $currentCate->subCategoriesWithProductCount = $subCategoriesWithProductCount;
            $currentCate->totalProducts = $totalCategoryProducts;
        }
        //current category
        return view('frontend.categories', compact('categories', 'currentCategory'));
    }

    ///showCategoryProducts
    public function showCategoryProducts(SubCategory $subcategory, Brand $brand, $category_slug, $sub_slug)
    {
        $categories = Category::with(['sub_categories.products'])
            ->where('status', 'published')
            ->get();

        foreach ($categories as $category) {
            $totalCategoryProducts = 0;
            $subCategoriesWithProductCount = [];

            foreach ($category->sub_categories as $subCategory) {
                $productCount = $subCategory->products->count();
                $totalCategoryProducts += $productCount;

                $subCategoriesWithProductCount[] = [
                    'subCategory' => $subCategory,
                    'productCount' => $productCount,
                ];
            }

            $category->subCategoriesWithProductCount = $subCategoriesWithProductCount;
            $category->totalProducts = $totalCategoryProducts;
        }
        $currentCategory = Category::with(['sub_categories.products'])
            ->where('status', 'published')
            ->where('slug', $category_slug)
            ->get();

        foreach ($currentCategory as $currentCate) {
            $totalCategoryProducts = 0;
            $subCategoriesWithProductCount = [];

            foreach ($currentCate->sub_categories as $subCategory) {
                $productCount = $subCategory->products->count();
                $totalCategoryProducts += $productCount;

                $subCategoriesWithProductCount[] = [
                    'subCategory' => $subCategory,
                    'productCount' => $productCount,
                ];
            }
            $currentCate->subCategoriesWithProductCount = $subCategoriesWithProductCount;
            $currentCate->totalProducts = $totalCategoryProducts;
        }
        $currentCategory = $currentCategory[0];

        ////end categories sidebar
        $category = Category::with(['sub_categories'])
            ->where('slug', $category_slug)
            ->get()[0];

        $sub_category = $subcategory->where('slug', $sub_slug)->get()[0];
        $products = $sub_category
            ->products()
            ->filter(request(['filterOptions', 'brands']))
            ->get();
        foreach ($products as $product) {
            $product->image_url =
                $product
                ->productImages()
                ->orderBy('id', 'ASC')
                ->first()->image ?? null;
        }
        $brands = Brand::with('products')->get();
        foreach ($products as $product) {
            $skus = SKU::where('product_id', $product->id)->get();
            $totalQuantity = $skus->sum('quantity');
            $product->total_quantity = $totalQuantity;
            }

        $brands = $brand->countProducts($brands, $sub_category->id);
        return view('frontend.categoryProduct', compact('sub_category', 'products', 'brands', 'currentCategory', 'categories'));
    }
    public function showSingleProduct($product_slug)
    {
        $product = Product::where('slug', $product_slug)->first();
        if (!$product) {
            // Xử lý khi không tìm thấy sản phẩm
            abort(404);
        }
        //breadcrumb
        $sub_cate_name = $product->getSubCate()->get()[0];

        $cate_name = $product
            ->getSubCate()
            ->get()[0]
            ->getCate()
            ->get()[0];
        $images = $product->productImages()->get();




        $totalQuantity = 0;


        // Lấy tất cả bình luận sản phẩm
        $productComments = ProductComment::with('user')->where('product_id', $product->id)->get();

        // Tính tổng số sao trung bình
        $totalStars = $productComments->sum('rating');
        $averageStars = $productComments->count() > 0 ? $totalStars / $productComments->count() : 0;

        // Lấy số lượng đánh giá cho mỗi mức độ rating
        $ratingCounts = $productComments->groupBy('rating')->map->count();


        // $variantValues = VariantValue::where('product_id', $product->id)->get();

        // $variantIds = $variantValues->pluck('variant_id')->unique();

        // $variants = Variant::whereIn('id', $variantIds)->get();
        $skuCodes = Sku::where('product_id', $product->id)->pluck('sku_code');
        
        $variantValueIds = SkuVariant::whereIn('sku', $skuCodes)->pluck('variant_value_id');
        $variantValues = VariantValue::whereIn('id', $variantValueIds)->get();

        $variantIds = $variantValues->pluck('variant_id')->unique();
        $variants = Variant::whereIn('id', $variantIds)->get();

        $product_quantity = Sku::select(DB::raw('SUM(quantity) as total_quantity'))
            ->where('product_id',  $product->id)

            ->get();
        // total sold number
        $sumQuantity = OrderItem::join('orders', 'order_items.order_id', '=', 'orders.id')
    ->where('order_items.product_id',   $product->id)
    ->where('orders.status', 'Thành công')
    ->sum('order_items.quantity');

        return view(
            'frontend.pages.singleProduct',
            compact(
                'product',
                'sub_cate_name',
                'cate_name',
                'images',
                'product_quantity',
                'totalQuantity',
                'productComments',
                'averageStars',
                'ratingCounts',
                'variantValues',
                'variants',
                'sumQuantity'
            )
        )->with('reviewCount', $productComments->count());;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function checkpayment(Request $request)
    {
        Session::put('discount', 0);
        if ($request->vnp_ResponseCode == '24') {
            $order_id = $request->vnp_TxnRef;
            $order = Order::find($order_id);
            $order->status = 'Chưa thanh toán';
            $order->save();
            // chưa thanh toán
            return redirect('/order')->with('message', 'Paid Cancelled, Please pay now');
        } elseif ($request->vnp_ResponseCode == '00') {
            $order_id = $request->vnp_TxnRef;
            $order = Order::find($order_id);
            $order->status = 'Đã thanh toán';
            $order->save();
            return redirect('/order')->with('message', 'Paid Successfully, explore new our products');
        } else {
            return redirect('/order');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function wallet()
    {
        $userId = Auth::id();

        $wallet = Wallet::where('user_id', $userId)->first();

        $transactions = Transaction::where('wallet_id', $wallet->id)
            ->where('status', 'complete')
            ->get();

        $totalAmount = $transactions->sum('amount');

        $wallet->balance = $totalAmount;
        $wallet->save();

        Session::put('wallet', $totalAmount);
        return view('frontend.pages.wallet', compact('wallet'));
    }
    public function transaction()
    {

        $userId = Auth::id();

        $wallet = Wallet::where('user_id', $userId)->first();

        $transactions = Transaction::where('wallet_id', $wallet->id)
            ->get();

        return view('frontend.pages.transaction', compact('transactions'));
    }
    public function createTransaction()
    {

        // Lấy dữ liệu từ POST
        $walletId = $_POST['wallet_id'];
        $amount = $_POST['amount'];
        $type = $_POST['type'];
        $method = $_POST['method'];

        // Kiểm tra nếu amount > 0
        if ($type == 'deposit' &&  $amount > 0) {
            // Tạo transaction
            $transaction = new Transaction();
            $transaction->wallet_id = $walletId;
            $transaction->amount = $amount;
            $transaction->type = $type;
            $transaction->method = $method;
            $transaction->save();

            // // Cập nhật balance trong wallets
            // $wallet = Wallet::find($walletId);
            // $wallet->balance += $amount;
            // $wallet->save();

            // Thực hiện các hành động khác sau khi tạo transaction và cập nhật balance

            // Redirect hoặc trả về thông báo thành công
            $userId = Auth::id();
            // protect

            $wallet = Wallet::where('user_id', $userId)->first();

            $transactions = Transaction::where('wallet_id', $wallet->id)
                ->where('status', 'complete')
                ->get();

            $totalAmount = $transactions->sum('amount');

            $wallet->balance = $totalAmount;
            $wallet->save();

            Session::put('wallet', $totalAmount);
        } else {
            // withdraw
            return;
        }
        if ($method == 'vn_pay') {

            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://localhost:8000/checkdeposit";
            $vnp_TmnCode = "D15NVMKJ"; //Mã website tại VNPAY
            $vnp_HashSecret = "ZXFYJFBDTZTNQYUUHJZCOTWBVBJVAIWW"; //Chuỗi bí mật

            $vnp_TxnRef = $transaction->id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = 'Thanh Toán đơn hàng tại Electro';
            $vnp_OrderType = 'bank';
            $vnp_Amount = ($amount) * 100 * 24305;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = 'http://localhost:8000/checkpayment';

            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,

            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            }

            //var_dump($inputData);
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array(
                'code' => '00', 'message' => 'success', 'data' => $vnp_Url
            );
            if (true) {
                // after payment is completed

                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
        }
    }
    public function checkdeposit(Request $request)
    {
        if ($request->vnp_ResponseCode == '24') {
            $tran_id = $request->vnp_TxnRef;
            $tran = Transaction::find($tran_id);
            $tran->save();
            // chưa thanh toán
            return redirect('/transaction')->with('message', 'Paid Cancelled');
        } elseif ($request->vnp_ResponseCode == '00') {

            $tran_id = $request->vnp_TxnRef;
            $tran = Transaction::find($tran_id);
            $tran->status = 'complete';

            $tran->save();
            return redirect('/wallet')->with('message', 'Paid Successfully, explore new our products');
        } else {
            return redirect('/wallet');
        }
    }
    public function about(Request $request)
    {
        return view('frontend.pages.about');
    }
    // public function changeLanguage(Request $request)
    // {
    //     $lang = $request->language;
    //     $language = config('app.locale');
    //     if ($lang == 'en') {
    //         $language = 'en';
    //     }
    //     if ($lang == 'vi') {
    //         $language = 'vi';
    //     }
    //     Session::put('language', $language);
    //     return redirect()->back();
    // }
}
