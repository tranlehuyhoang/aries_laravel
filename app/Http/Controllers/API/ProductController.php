<?php

namespace App\Http\Controllers\Api;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Lấy tất cả các sản phẩm từ bảng 'products'
        // $products = Brand::select('name')->get();
        // // $products=Product::all();
        $product = Product::orderBy('promotion_price', 'desc')->first();

         if (!$product) {
        return response()->json(['message' => 'No products found.'], 404);
            }

        return response()->json([
         'id' => $product->id,
        'name' => $product->name,
        'price' => $product->promotion_price,
]);

    }
}
