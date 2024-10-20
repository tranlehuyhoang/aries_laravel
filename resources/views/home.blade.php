@extends('layout.layout')

@section('content')
@include('inc/_header')
<!-- ========== MAIN CONTENT ========== -->
<script>
    // Mendapatkan data produk dari blade template
    var productss = @json($productss);

    // Menyimpan data produk ke localStorage
    localStorage.setItem('products', JSON.stringify(productss));
</script>
<style>
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;

        z-index: 2000;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .overlay .loader {
        color: #000000;
        font-size: 5rem;
        font-weight: bold;
    }

    .none_loading {
        display: none;
    }
</style>

<div style="background-color: rgb(255, 255, 255)" class="overlay" id="myDiv">
    <i style="color: #fed700" class="loader fas fa-spinner fa-spin"></i>
</div>

<script>
    // Xử lý sự kiện khi trang web bắt đầu tải
    window.addEventListener('load', function() {
        // Ẩn thẻ div overlay
        document.getElementById('myDiv').classList.add('none_loading');
    });

    // Xử lý sự kiện khi trang web hoàn thành tải
    document.addEventListener('DOMContentLoaded', function() {
        // Hiển thị thẻ div overlay
        document.getElementById('myDiv').classList.remove('none_loading');
    });
</script>

<main id="content" role="main">
    @if(session('login') == 'true')
    <script>
    console.log('Thành công');
    function showAlert() {

      Swal.fire({
        title: 'Thông báo',
        text: 'Đăng nhập thành công !!!',
        icon: 'success',
        confirmButtonText: 'OK'
      });
    }
    showAlert()
    window.location.href = '{{ route("home") }}';
  </script>
@else
<script>

  </script>
@endif
    <!-- Slider Section -->
    @include('inc._slider')
    <!-- End Slider Section -->

    <div class="container" >
        {{-- <script src="https://cdn.socket.io/4.4.1/socket.io.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const socket = io('http://localhost:7000', {
                    transports: ['websocket']
                });

                socket.on('connect', () => {
                    // console.log('Đã kết nối đến máy chủ');
                    socket.emit('chat-message', 'Có người đang truy cập');
                });

                socket.on('disconnect', () => {
                    // console.log('Mất kết nối từ máy chủ');
                });
                socket.on('chat-message', (message) => {
                    // console.log('Nhận tin nhắn từ máy chủ:', message);
                });
            });

        </script> --}}
        <!-- Banner -->
        <div class="mb-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-xl-0">
                    <a href="{{ url('category/smartwatch') }}" class="d-block">
                        <img class="img-fluid" data-src="{{asset('client/img/47.webp')}}" lazy style="" alt="Image Description">
                    </a>
                </div>
                <div class="col-md-6 mb-4 mb-xl-0">
                    <a href="{{ url('category/speaker') }}" class="d-block">
                        <img class="img-fluid" data-src="{{asset('client/img/49.webp')}}" lazy style="" alt="Image Description">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Banner -->
        <!-- Categories Carousel -->
        <div class="mb-5">
            <div class="position-relative">
                <div class="js-slick-carousel u-slick u-slick--gutters-0 position-static overflow-hidden u-slick-overflow-visble pb-5 pt-2 px-1" data-arrows-classes="d-none d-xl-block u-slick__arrow-normal u-slick__arrow-centered--y rounded-circle text-black font-size-30 z-index-2" data-arrow-left-classes="fa fa-angle-left u-slick__arrow-inner--left left-n16" data-arrow-right-classes="fa fa-angle-right u-slick__arrow-inner--right right-n20" data-pagi-classes="d-xl-none text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 pt-1" data-slides-show="10" data-slides-scroll="1" data-responsive='[{
                              "breakpoint": 1400,
                              "settings": {
                                "slidesToShow": 8
                              }
                            }, {
                                "breakpoint": 1200,
                                "settings": {
                                  "slidesToShow": 6
                                }
                            }, {
                              "breakpoint": 992,
                              "settings": {
                                "slidesToShow": 5
                              }
                            }, {
                              "breakpoint": 768,
                              "settings": {
                                "slidesToShow": 3
                              }
                            }, {
                              "breakpoint": 554,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }]'>
                        @forelse ($categories as $category)
                    <div class="js-slide">
                        <a href="{{route('frontend.category.list', ['category_slug' => $category->slug])}}" class="d-block text-center bg-on-hover width-122 mx-auto">
                            <div class="bg pt-4 rounded-circle-top width-122 height-75">
                                <i class="ec ec-{{$category->slug}} font-size-40"></i>
                            </div>
                            <div class="bg-white px-2 pt-2 width-122">
                                <h6 class="font-weight-semi-bold font-size-14 text-gray-90 mb-0 text-lh-1dot2">@php
                                    echo Str::ucfirst($category->name)
                                    @endphp</h6>
                            </div>
                        </a>
                    </div>
                    @empty

                    @endforelse

                </div>
            </div>
        </div>

        <!-- Full banner -->
        <div class="mb-8">
            <a href="{{ route("fe.shop") }}" class="d-block text-gray-90">
                <div class="" style="background-image: url({{asset('client/img/1400X206/img1.jpg')}});">
                    <div class="space-top-2-md p-4 pt-6 pt-md-8 pt-lg-6 pt-xl-8 pb-lg-4 px-xl-8 px-lg-6">
                        <div class="flex-horizontal-center mt-lg-3 mt-xl-0 overflow-auto overflow-md-visble">
                            <h1 class="text-lh-38 font-size-32 font-weight-light mb-0 flex-shrink-0 flex-md-shrink-1">SHOP AND <strong>SAVE BIG</strong> ON HOTTEST TABLETS</h1>
                            <div class="ml-5 flex-content-center flex-shrink-0">
                                <div class="bg-primary rounded-lg px-6 py-2">
                                    <em class="font-size-14 font-weight-light">STARTING AT</em>
                                    <div class="font-size-30 font-weight-bold text-lh-1">
                                        <sup class="">$</sup>79<sup class="">99</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @if(count($relatedProducts) > 0)

        <h3>Sản phẩm liên quan</h3>
        <div class="d-flex flex-wrap">
            @foreach($relatedProducts as $relatedProduct)
                <div class="product-item mx-1 remove-divider">
                    <div class="product-it3em__outer">
                        <div class="product-it3em__inner bg-white px-wd-3 p-2 p-md-3" style="height: 330px">
                            <div class="product-ite3m3__3body pb-xl-2" style="display: flex; flex-direction: column; justify-content: space-between; height: 288px;">
                                <div class="mb-2">
                                    <a href="{{ route('frontend.category.show',['product_slug' =>  $relatedProduct->slug ]) }}" class="font-size-12 text-gray-5" tabindex="0">
                                        {{ $relatedProduct->sub_category_name ?? 'Danh mục' }}
                                    </a>
                                </div>
                                <h5 class="mb-1 product-item__title">
                                    <a href="{{ route('frontend.category.show',['product_slug' =>  $relatedProduct->slug ]) }}" class="text-blue font-weight-bold" tabindex="0">
                                        {{ $relatedProduct->name }}
                                    </a>
                                </h5>
                                <div class="mb-2" style="position: relative;">
                                    <a href="{{ route('frontend.category.show',['product_slug' =>  $relatedProduct->slug ]) }}" class="d-block text-center" tabindex="0">
                                        <img class="img-fluid" style="height: 150px; object-fit: contain" src="{{asset('storage/' . $relatedProduct->image_url)    }}" alt="{{ $relatedProduct->name }}">

                                        @if($relatedProduct->promotion_price)
                                            <div class="" style="color: black; font-weight: 700; clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%); position: absolute; bottom: 0; left: -1rem; z-index: 100; text-align: start; padding-left: 1rem; width: 80px; height: 20px; background: #fed700">
                                                - {{ number_format(100 - ($relatedProduct->promotion_price / $relatedProduct->price * 100), 0) }}%
                                            </div>
                                        @endif
                                    </a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <ins class="font-size-20 text-red text-decoration-none">
                                            ${{ number_format($relatedProduct->promotion_price ?? $relatedProduct->price, 0) }}.00
                                        </ins>
                                        @if($relatedProduct->promotion_price)
                                            <br>
                                            <del class="font-size-12 text-gray-6">
                                                ${{ number_format($relatedProduct->price, 0) }}.00
                                            </del>
                                        @endif
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="{{ route('frontend.category.show',['product_slug' =>  $relatedProduct->slug ]) }}" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0">
                                            <i class="ec ec-add-to-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="#" class="text-gray-6 font-size-13" tabindex="0">
                                        <i class="ec ec-compare mr-1 font-size-15"></i> So sánh
                                    </a>
                                    <a href="#" class="text-gray-6 font-size-13" tabindex="0">
                                        <i class="ec ec-favorites mr-1 font-size-15"></i> Yêu thích
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Không có sản phẩm liên quan.</p>
    @endif


        <!-- End Full banner -->
        <!-- Laptops & Computers -->

        <!-- End Laptops & Computers -->
        <!-- Smartphones & Tablets -->

        <!-- End Smartphones & Tablets -->
        <!-- Banner -->

        <!-- End Banner -->

    </div>
</main>

<!-- ========== END MAIN CONTENT ========== -->



@endsection
