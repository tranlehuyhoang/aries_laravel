@extends('layout.layout')
@section('content')
    @include('inc/_header')
    <main id="content" role="main">

        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('home') }}">Trang
                                    chủ</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Cửa hàng
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="row mb-8">
                <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                    <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                        <!-- List -->
                        <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                            <li>
                                <div class="dropdown-title">Danh mục</div>
                            </li>
                            @foreach ($categories as $item)
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
                                        data-toggle="collapse" aria-expanded="false"
                                        aria-controls="sidebarNav{{ $item->id }}Collapse"
                                        data-target="#sidebarNav{{ $item->id }}Collapse">
                                        {{ ucwords($item->name) }}<span
                                            class="text-gray-25 font-size-12 font-weight-normal">
                                            ({{ $item->totalProducts }})
                                        </span>
                                    </a>

                                    <div id="sidebarNav{{ $item->id }}Collapse" class="collapse"
                                        data-parent="#sidebarNav">
                                        <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            @foreach ($item->subCategoriesWithProductCount as $item2)
                                                <li><a class="dropdown-item"
                                                        href="{{ route('frontend.category.products', ['category_slug' => $item->slug, 'sub_slug' => $item2['subCategory']->slug]) }}">{{ $item2['subCategory']->name }}<span
                                                            class="text-gray-25 font-size-12 font-weight-normal">
                                                            ({{ isset($item2['productCount']) ? $item2['productCount'] : '0' }})
                                                        </span></a>
                                                </li>
                                            @endforeach

                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="mb-6">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Bộ lọc</h3>
                        </div>
                        {{-- price --}}
                        <div class="range-slider">
                            <h4 class="font-size-14 mb-3 font-weight-bold">Khoảng giá</h4>
                            <!-- Range Slider -->
                            <form method="get" action="" >
                                <div id="slider"></div>
                                <input type="hidden" name="filter_min" id="filter_min" >
                                <input type="hidden" name="filter_max" id="filter_max" >
                                <!-- End Range Slider -->
                                <div class="mt-4 text-gray-111 d-flex mb-4  ">
                                    <span class="mr-0dot5 "><strong>Giá</strong>: </span>
                                    <span id="rangeSliderExample3MinResult" class=""></span>$
                                    <span class="mx-0dot5"> — </span>
                                    <span id="max_price_text">$</span>
                                    <span id="rangeSliderExample3MaxResult" class=""></span>$
                                </div>

                                <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Tìm kiếm</button>
                            </form>

                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css">
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js"></script>
                            <script>
                                var slider = document.getElementById('slider');
                                var minPriceText = document.getElementById('rangeSliderExample3MinResult');
                                var maxPriceText = document.getElementById('max_price_text');
                                var minPriceInput = document.getElementById('filter_min');
                                var maxPriceInput = document.getElementById('filter_max');

                                // Check if slider values are stored in session
                                var storedMinPrice = sessionStorage.getItem('minPrice');
                                var storedMaxPrice = sessionStorage.getItem('maxPrice');

                                // Set initial slider values
                                var startMinPrice = storedMinPrice ? parseFloat(storedMinPrice) : 0;
                                var startMaxPrice = storedMaxPrice ? parseFloat(storedMaxPrice) : 500;

                                noUiSlider.create(slider, {
                                    start: [startMinPrice, startMaxPrice],
                                    connect: true,
                                    range: {
                                        'min': 0,
                                        'max': 3000
                                    },
                                    format: {
                                        to: function (value) {
                                            return Math.round(value);
                                        },
                                        from: function (value) {
                                            return value;
                                        }
                                    }
                                });

                                slider.noUiSlider.on('update', function (values) {
                                    minPriceText.textContent = values[0];
                                    maxPriceText.textContent = values[1];
                                    minPriceInput.value = values[0];
                                    maxPriceInput.value = values[1];

                                    // Store slider values in session
                                    sessionStorage.setItem('minPrice', values[0]);
                                    sessionStorage.setItem('maxPrice', values[1]);
                                });
                            </script>
                            <style>
                                .noUi-connect {
                                    background: #fed700;
                                }
                            </style>
                        </div>
                        {{-- price --}}
                        

                    </div>

                </div>
                <div class="col-xl-9 col-wd-9gdot5">
                    <!-- Recommended Products -->
                    <div class="mb-6 d-none d-xl-block">
                        <div class="position-relative">
                            <div class="border-bottom border-color-1 mb-2">
                                <h3 class="d-inline-block section-title section-title__full mb-0 pb-2 font-size-22">
                                    Sản Phẩm Đề Xuất</h3>
                            </div>
                            <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                                data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                data-slides-show="5" data-slides-scroll="1"
                                data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                data-arrow-left-classes="fa fa-angle-left right-1"
                                data-arrow-right-classes="fa fa-angle-right right-0"
                                data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 4
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>
                                @foreach ($products as $product)

                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2" style="display: flex; flex-direction: column; justify-content: space-between; height: 288px;">
                                                <div class="mb-2">
                                                    <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}" class="font-size-12 text-gray-5">{{ $product->sub_category_name }}</a>
                                                    <h5 class="mb-1 product-item__title">
                                                        <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}" class="text-blue font-weight-bold">
                                                            @php
                                                                echo ucwords($product->name);
                                                            @endphp
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div class="mb-2" style="position: relative">
                                                    <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}" class="d-block text-center">
                                                        <img class="img-fluid" style="height: 175px !important; object-fit: contain" src="{{ $product->image_url ? asset('storage/' . $product->image_url) : asset('client/img/212X200/img2.jpg') }}" alt="Image Description">
                                                           @if ($product->total_quantity > 0)
                                                            <div class=""
                                                                style="color: black; font-weight: 700;clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%); position: absolute; bottom: 0; left: -1rem; z-index: 100; width: 70px ; height: 20px; background: #fed700">

                                                                -
                                                                {{ round((($product->price - $product->promotion_price) / $product->price) * 100) }}%
                                                            </div>
                                                        @else
                                                            <div class=""
                                                                style="color: white; font-weight: 700;clip-path: polygon(0 0, 100% 0%, 85% 100%, 0% 100%); position: absolute; bottom: 0; left: -1rem; z-index: 100; width: 140px ; height: 20px; background: red">

                                                                Hết hàng
                                                            </div>
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    @if ($product->promotion_price)
                                                        <div class="prodcut-price d-flex align-items-center position-relative mt-3 ">
                                                            <ins class="font-size-20 text-red text-decoration-none">${{ $product->promotion_price }},00</ins>
                                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ $product->price }},00</del>
                                                        </div>
                                                    @else
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">${{ $product->price }}.00</div>
                                                        </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}" class="btn-add-cart btn-primary transition-3d-hover">
                                                            <i class="ec ec-add-to-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13">
                                                        <i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13">
                                                        <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>

                                    @if ($loop->iteration >= 10)
                                    @break
                                @endif
                            @endforeach




                            {{--  --}}

                        </div>
                    </div>
                </div>
                <!-- End Recommended Products -->
                <!-- Shop-control-bar Title -->
                <div class="flex-center-between mb-3">
                    <h3 class="font-size-25 mb-0">Cửa hàng</h3>
                    <p class="pagination-info">
                        Đang hiển thị {{ $products->firstItem() }}–{{ $products->lastItem() }} trong {{ $products->total() }} kết quả
                    </p>
                </div>
                <!-- End shop-control-bar Title -->
                <!-- Shop-control-bar -->
                <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                    <div class="d-xl-none">
                        <!-- Account Sidebar Toggle Button -->
                        <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;"
                            role="button" aria-controls="sidebarContent1" aria-haspopup="true"
                            aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
                            data-unfold-target="#sidebarContent1" data-unfold-type="css-animation"
                            data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft"
                            data-unfold-duration="500">
                            <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                        </a>
                        <!-- End Account Sidebar Toggle Button -->
                    </div>
                    <div class="px-3 d-none d-xl-block">
                        <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill"
                                    href="#pills-one-example1" role="tab" aria-controls="pills-one-example1"
                                    aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-th"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-two-example1-tab" data-toggle="pill"
                                    href="#pills-two-example1" role="tab" aria-controls="pills-two-example1"
                                    aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-align-justify"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill"
                                    href="#pills-three-example1" role="tab" aria-controls="pills-three-example1"
                                    aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-list"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-four-example1-tab" data-toggle="pill"
                                    href="#pills-four-example1" role="tab" aria-controls="pills-four-example1"
                                    aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        <i class="fa fa-th-list"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex">


                    </div>
                    <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                        <form method="post" class="min-width-50 mr-1">
                            <input size="2" min="1" max="3" step="1" type="number"
                                class="form-control text-center px-2 height-35" value="1">
                        </form> of 3
                        <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
                    </nav>
                </div>
                <!-- End Shop-control-bar -->
                <!-- Shop Body -->
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
                        aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                        <ul class="row list-unstyled products-group no-gutters">
                            @foreach ($products as $product)
                                <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2"
                                                style="display: flex; flex-direction: column; justify-content: space-between; height: 288px;">
                                                <div class="mb-2">
                                                    <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                        class="font-size-12 text-gray-5">{{ $product->sub_category_name }}</a>
                                                    <h5 class="mb-1 product-item__title">
                                                        <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                            class="text-blue font-weight-bold">
                                                            @php
                                                                echo ucwords($product->name);
                                                            @endphp
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div class="mb-2" style="position: relative;">
                                                    <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                        class="d-block text-center">
                                                        <img class="img-fluid" style="height: 175px !important; object-fit: contain"
                                                            src="{{ $product->image_url ? asset('storage/' . $product->image_url) : asset('client/img/212X200/img2.jpg') }}"
                                                            alt="Image Description">
                                                        @if ($product->total_quantity > 0)
                                                            <div class=""
                                                                style="color: black; font-weight: 700;clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%); position: absolute; bottom: 0; left: -1rem; z-index: 100; width: 70px ; height: 20px; background: #fed700">

                                                                -
                                                                {{ round((($product->price - $product->promotion_price) / $product->price) * 100) }}%
                                                            </div>
                                                        @else
                                                            <div class=""
                                                                style="color: white; font-weight: 700;clip-path: polygon(0 0, 100% 0%, 85% 100%, 0% 100%); position: absolute; bottom: 0; left: -1rem; z-index: 100; width: 140px ; height: 20px; background: red">

                                                                Hết hàng
                                                            </div>
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    @if ($product->promotion_price)
                                                        <div
                                                            class="prodcut-price d-flex align-items-center position-relative mt-2">
                                                            <ins
                                                                class="font-size-20 text-red text-decoration-none">${{ $product->promotion_price }},00</ins>
                                                            <del
                                                                class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ $product->price }},00</del>
                                                        </div>
                                                    @else
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">${{ $product->price }}.00</div>
                                                        </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                            class="btn-add-cart btn-primary transition-3d-hover">
                                                            <i class="ec ec-add-to-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13">
                                                        <i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13">
                                                        <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel"
                        aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                        <ul class="row list-unstyled products-group no-gutters">
                            @foreach ($products as $product)
                                <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                        class="font-size-12 text-gray-5"> @php
                                                            echo ucwords($product->sub_category_name);
                                                        @endphp</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                        class="text-blue font-weight-bold"> @php
                                                            echo ucwords($product->name);
                                                        @endphp</a></h5>
                                                <div class="mb-2" style="position: relative;">
                                                    <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                        class="d-block text-center"><img class="img-fluid"
                                                            style="max-height: 175px !important"
                                                            src="{{ $product->image_url ? asset('storage/' . $product->image_url) : asset('client/img/212X200/img2.jpg') }}"
                                                            alt="Image Description"></a>
                                                    @if ($product->total_quantity > 0)
                                                        <div class=""
                                                            style="color: black; font-weight: 700;clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%); position: absolute; bottom: 0; left: -1rem; z-index: 100; width: 70px ; height: 20px; background: #fed700">

                                                            -
                                                            {{ round((($product->price - $product->promotion_price) / $product->price) * 100) }}%
                                                        </div>
                                                    @else
                                                        <div class=""
                                                            style="color: white; font-weight: 700;clip-path: polygon(0 0, 100% 0%, 85% 100%, 0% 100%); position: absolute; bottom: 0; left: -1rem; z-index: 100; width: 140px ; height: 20px; background: red">

                                                            Hết hàng
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <a class="d-inline-flex align-items-center small font-size-14"
                                                        href="#">
                                                        <div class="text-warning mr-2">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                        <span class="text-secondary">(40)</span>
                                                    </a>
                                                </div>
                                                <ul class="font-size-12 p-0 text-gray-110 mb-4">
                                                    @php
                                                        echo ucwords($product->description);
                                                    @endphp
                                                </ul>
                                                <div class="text-gray-20 mb-2 font-size-12">SKU: FW511948218</div>
                                                <div class="flex-center-between mb-1">
                                                    @if ($product->promotion_price)
                                                        <div
                                                            class="prodcut-price d-flex align-items-center position-relative">
                                                            <ins
                                                                class="font-size-20 text-red text-decoration-none">${{ $product->promotion_price }},00</ins>
                                                            <del
                                                                class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ $product->price }},00</del>
                                                        </div>
                                                    @else
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">${{ $product->price }}.00</div>
                                                        </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="../shop/wishlist.html"
                                                        class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel"
                        aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                        <ul class="d-block list-unstyled products-group prodcut-list-view">
                            @foreach ($products as $product)
                                <li class="product-item remove-divider">
                                    <div class="product-item__outer w-100">
                                        <div class="product-item__inner remove-prodcut-hover py-4 row">
                                            <div class="product-item__header col-6 col-md-4">
                                                <div class="mb-2">
                                                    <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                        class="d-block text-center"><img class="img-fluid"
                                                            style="height: 170px; max-height: 175px !important"
                                                            src="{{ $product->image_url ? asset('storage/' . $product->image_url) : asset('client/img/212X200/img2.jpg') }}"
                                                            alt="Image Description"></a>
                                                </div>
                                            </div>
                                            <div class="product-item__body col-6 col-md-5">
                                                <div class="pr-lg-10">
                                                    <div class="mb-2"><a
                                                            href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                            class="font-size-12 text-gray-5">@php
                                                                echo ucwords($product->sub_category_name);
                                                            @endphp</a>
                                                    </div>
                                                    <h5 class="mb-2 product-item__title"><a
                                                            href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                            class="text-blue font-weight-bold">
                                                            @php
                                                                echo ucwords($product->name);
                                                            @endphp</a></h5>
                                                    <div class="prodcut-price mb-2 d-md-none">
                                                        @if ($product->promotion_price)
                                                            <div
                                                                class="prodcut-price d-flex align-items-center position-relative">
                                                                <ins
                                                                    class="font-size-20 text-red text-decoration-none">${{ $product->promotion_price }},00</ins>
                                                                <del
                                                                    class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ $product->price }},00</del>
                                                            </div>
                                                        @else
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">${{ $product->price }}.00
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="mb-3 d-none d-md-block">
                                                        <a class="d-inline-flex align-items-center small font-size-14"
                                                            href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high
                                                            quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme
                                                            quality, durable EVA crush resistant, anti-shock material.
                                                        </li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28
                                                            megapixel CMOS rear camera</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-item__footer col-md-3 d-md-block">
                                                <div class="mb-3">
                                                    <div class="prodcut-price mb-2">
                                                        @if ($product->promotion_price)
                                                            <div
                                                                class="prodcut-price d-flex align-items-center position-relative">
                                                                <ins
                                                                    class="font-size-20 text-red text-decoration-none">${{ $product->promotion_price }},00</ins>
                                                                <del
                                                                    class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ $product->price }},00</del>
                                                            </div>
                                                        @else
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">${{ $product->price }}.00
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="prodcut-add-cart">
                                                        <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                            class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                                                    <a href="../shop/compare.html"
                                                        class="text-gray-6 font-size-13 mx-wd-3"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="../shop/wishlist.html"
                                                        class="text-gray-6 font-size-13 mx-wd-3"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="tab-pane fade pt-2" id="pills-four-example1" role="tabpanel"
                        aria-labelledby="pills-four-example1-tab" data-target-group="groups">
                        <ul class="d-block list-unstyled products-group prodcut-list-view-small">
                            @foreach ($products as $product)
                                <li class="product-item remove-divider">
                                    <div class="product-item__outer w-100">
                                        <div class="product-item__inner remove-prodcut-hover py-4 row">
                                            <div class="product-item__header col-6 col-md-2">
                                                <div class="mb-2">
                                                    <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                        class="d-block text-center"><img class="img-fluid"
                                                            style="max-height: 175px !important"
                                                            src="{{ $product->image_url ? asset('storage/' . $product->image_url) : asset('client/img/212X200/img2.jpg') }}"
                                                            alt="Image Description"></a>
                                                </div>
                                            </div>
                                            <div class="product-item__body col-6 col-md-7">
                                                <div class="pr-lg-10">
                                                    <div class="mb-2"><a
                                                            href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                            class="font-size-12 text-gray-5">@php
                                                            echo ucwords($product->sub_category_name);
                                                        @endphp</a></div>
                                                    <h5 class="mb-2 product-item__title"><a
                                                            href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                            class="text-blue font-weight-bold">@php
                                                            echo ucwords($product->name);
                                                        @endphp</a></h5>
                                                    <div class="prodcut-price d-md-none">
                                                        @if ($product->promotion_price)
                                                            <div
                                                                class="prodcut-price d-flex align-items-center position-relative">
                                                                <ins
                                                                    class="font-size-20 text-red text-decoration-none">${{ $product->promotion_price }},00</ins>
                                                                <del
                                                                    class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ $product->price }},00</del>
                                                            </div>
                                                        @else
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">${{ $product->price }}.00
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high
                                                            quality</li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme
                                                            quality, durable EVA crush resistant, anti-shock material.
                                                        </li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28
                                                            megapixel CMOS rear camera</li>
                                                    </ul>
                                                    <div class="mb-3 d-none d-md-block">
                                                        <a class="d-inline-flex align-items-center small font-size-14"
                                                            href="#">
                                                            <div class="text-warning mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer col-md-3 d-md-block">
                                                <div class="mb-2 flex-center-between">
                                                    <div class="prodcut-price">
                                                        @if ($product->promotion_price)
                                                            <div
                                                                class="prodcut-price d-flex align-items-center position-relative">
                                                                <ins
                                                                    class="font-size-20 text-red text-decoration-none">${{ $product->promotion_price }},00</ins>
                                                                <del
                                                                    class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ $product->price }},00</del>
                                                            </div>
                                                        @else
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">${{ $product->price }}.00
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="prodcut-add-cart">
                                                        <a href="{{ route('frontend.category.show', ['product_slug' => $product->slug]) }}"
                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                                                    <a href="../shop/compare.html"
                                                        class="text-gray-6 font-size-13 mx-wd-3"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="../shop/wishlist.html"
                                                        class="text-gray-6 font-size-13 mx-wd-3"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- End Tab Content -->
                <!-- End Shop Body -->
                <!-- Shop Pagination -->
                <nav class="d-md-flex justify-content-between align-items-center border-top pt-3"
                    aria-label="Page navigation example">
                    <p class="pagination-info">
                        Đang hiển thị {{ $products->firstItem() }}–{{ $products->lastItem() }} trong {{ $products->total() }} kết quả.
                    </p>

                    <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                        {{ $products->links() }}
                    </ul>
                </nav>


                <!-- End Shop Pagination -->
            </div>
        </div>

    </div>
</main>
@endsection
