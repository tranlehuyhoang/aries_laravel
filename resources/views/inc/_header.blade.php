<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="py-2 d-none d-xl-block">
            <div class="container">
                <div class="flex-content-center">
                    <div class="font-size-13">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item u-header-topbar__nav-item u-header-topbar__nav-item-no-border"><a
                                    class="text-gray-90" title="30 days free return"
                                    href="#">{{ __('free_return') }} </a></li>
                            <li class="list-inline-item u-header-topbar__nav-item u-header-topbar__nav-item-no-border">
                                <a class="text-gray-90" title="FREE SHIPPING  FOR OVER $40"
                                    href="#">{{ __('free_shipping') }} </a>
                            </li>
                            <li class="list-inline-item u-header-topbar__nav-item u-header-topbar__nav-item-no-border">
                                <a class="text-gray-90" title="BEST WORLDWIDE DELIVERY"
                                    href="#">{{ __('best_delivery') }} </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <!-- Contact-Logo-Search-header-icons -->
        <div class="bg-primary">
            <div class="py-2 px-xl-4">
                <div class="row align-items-center mx-0">
                    <!-- Contact -->
                    <div class="d-none d-xl-block col-xl-5">
                        <ul class="list-inline mb-0">
                            <li
                                class="list-inline-item u-header-topbar__nav-item u-header-topbar__nav-item-no-border mr-0">
                                <a href="tel:0962524613" class="u-header-topbar__nav-link"><i
                                        class="ec ec-phone mr-1"></i> 0962524613</a>
                            </li>
                            <li class="list-inline-item u-header-topbar__nav-item u-header-topbar__nav-item-no-border">
                                <a href="trangiangzxc@gmail.com" class="u-header-topbar__nav-link"><i
                                        class="ec ec-mail mr-1"></i> loinguyen.cool@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Contact -->
                    <!-- Logo -->
                    <div class="col-auto col-xl-2">
                        <!-- Nav -->
                        <nav class="navbar navbar-expand u-header__navbar py-0">
                            <!-- Fullscreen Toggle Button -->
                            <button id="sidebarHeaderInvokerMenu" type="button"
                                class="d-xl-none navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false"
                                data-unfold-event="click" data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarHeader1" data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                    <span class="u-hamburger__inner"></span>
                                </span>
                            </button>
                            <!-- End Fullscreen Toggle Button -->

                            <!-- Logo -->
                            {{-- <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mx-auto justify-content-center"
                                href="{{ route('home') }}" aria-label="Electro">
                                <svg version="1.1" x="0px" y="0px" width="120px" height="42.52px"
                                    viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52"
                                    style="margin-bottom: 0;">
                                    <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700"
                                        cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48"
                                        d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                            C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                            c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                            c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                            c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                            c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                            c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                            c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                            c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                            M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                            c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                            c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                            c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                            c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                            M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                            c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                            c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                            C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                            C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                            c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                            c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                            c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                            C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                            c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                            c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                            c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                            c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                            c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                            c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                            C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                            c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                            c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                            c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                            c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                            c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                    </path>
                                </svg>
                            </a> --}}
                            <h3><b>Aries</b></h3>
                            <!-- End Logo -->
                        </nav>
                        <!-- End Nav -->
                        <!-- ========== HEADER SIDEBAR ========== -->
                        <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left"
                            aria-labelledby="sidebarHeaderInvokerMenu">
                            <div class="u-sidebar__scroller">
                                <div class="u-sidebar__container">
                                    <div class="u-header-sidebar__footer-offset pb-0">
                                        <!-- Toggle Button -->
                                        <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                            <button type="button" class="close ml-auto" aria-controls="sidebarHeader"
                                                aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                                                data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarHeader1"
                                                data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft"
                                                data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                                <span aria-hidden="true"><i
                                                        class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                            </button>
                                        </div>
                                        <!-- End Toggle Button -->

                                        <!-- Content -->
                                        <div class="js-scrollbar u-sidebar__body">
                                            <div id="headerSidebarContent"
                                                class="u-sidebar__content u-header-sidebar__content">
                                                <!-- Logo -->
                                                <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical"
                                                    href="{{ route('home') }}" aria-label="Electro">
                                                    <svg version="1.1" x="0px" y="0px" width="175.748px"
                                                        height="42.52px" viewBox="0 0 175.748 42.52"
                                                        enable-background="new 0 0 175.748 42.52"
                                                        style="margin-bottom: 0;">
                                                        <ellipse class="ellipse-bg" fill-rule="evenodd"
                                                            clip-rule="evenodd" fill="#FDD700" cx="170.05"
                                                            cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48"
                                                            d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                                C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                                c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                                c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                                c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                                c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                                c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                                c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                                c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                                M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                                c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                                c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                                c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                                c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                                M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                                c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                                c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                                C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                                C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                                c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                                c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                                c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                                C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                                c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                                c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                                c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                                c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                                c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                                c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                                C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                                c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                                c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                                c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                                c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                                c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <!-- End Logo -->

                                                <!-- List -->
                                                <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="{{ route('home') }}" aria-expanded="false"
                                                            aria-controls="headerSidebarHomeCollapse" data-target="">
                                                            {{ __('home') }}
                                                        </a>

                                                    </li>

                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="{{ route('fe.shop') }}" data-target=""
                                                            aria-expanded="false"
                                                            aria-controls="headerSidebarPagesCollapse">
                                                            {{ __('shop') }}
                                                        </a>
                                                    </li>

                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="{{ route('fe.blog') }}" data-target=""
                                                            aria-expanded="false"
                                                            aria-controls="headerSidebarPagesCollapse">
                                                            {{ __('blog') }}
                                                        </a>
                                                    </li>

                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="{{ route('admin.cart.list') }}" data-target=""
                                                            aria-expanded="false"
                                                            aria-controls="headerSidebarPagesCollapse">
                                                            {{ __('cart') }}
                                                        </a>
                                                    </li>

                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="{{ route('frontend.wishlist.list') }}"
                                                            data-target="" aria-expanded="false"
                                                            aria-controls="headerSidebarPagesCollapse">
                                                            {{ __('wishlist') }}
                                                        </a>
                                                    </li>

                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="{{ route('frontend.order.list') }}" data-target=""
                                                            aria-expanded="false"
                                                            aria-controls="headerSidebarPagesCollapse">
                                                            {{ __('order') }}
                                                        </a>
                                                    </li>

                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="{{ route('frontend.myaccount.dashboard') }}"
                                                            data-target="" aria-expanded="false"
                                                            aria-controls="headerSidebarPagesCollapse">
                                                            {{ __('profile') }}
                                                        </a>
                                                    </li>

                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="#" data-target="" aria-expanded="false"
                                                            aria-controls="headerSidebarPagesCollapse">
                                                            {{ __('features') }}
                                                        </a>
                                                    </li>

                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="{{ route('frontend.about') }}" data-target=""
                                                            aria-expanded="false"
                                                            aria-controls="headerSidebarPagesCollapse">
                                                            {{ __('about_us') }}
                                                        </a>
                                                    </li>

                                                    <li class="u-has-submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                            href="{{ route('frontend.contact.view') }}"
                                                            data-target="" aria-expanded="false"
                                                            aria-controls="headerSidebarPagesCollapse">
                                                            {{ __('contact_us') }}
                                                        </a>
                                                    </li>
                                                    <!-- End Blog Pages -->
                                                </ul>
                                                <!-- End List -->
                                            </div>
                                        </div>
                                        <!-- End Content -->
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- ========== END HEADER SIDEBAR ========== -->
                    </div>
                    <!-- End Logo -->
                    <!-- Search Bar -->
                    <div class="d-none d-xl-block col-xl-2gdot5">
                        <style>
                            /* Dropdown Button */
                            .dropbtn {
                                background-color: #04AA6D;
                                color: white;
                                padding: 16px;
                                font-size: 16px;
                                border: none;
                                cursor: pointer;
                            }

                            /* Dropdown button on hover & focus */
                            .dropbtn:hover,
                            .dropbtn:focus {
                                background-color: #3e8e41;
                            }

                            /* The search field */
                            #myInput {
                                box-sizing: border-box;
                                background-image: url('searchicon.png');
                                background-position: 14px 12px;
                                background-repeat: no-repeat;
                                font-size: 16px;
                                padding: 14px 20px 12px 45px;
                                border: none;
                                border-bottom: 1px solid #ddd;
                            }

                            /* The search field when it gets focus/clicked on */
                            #myInput:focus {
                                outline: 3px solid #ddd;
                            }

                            /* The container <div> - needed to position the dropdown content */
                            .dropdown {
                                position: relative;
                                display: inline-block;
                            }

                            /* Dropdown Content (Hidden by Default) */
                            .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: #ffffff;
                                min-width: 230px;
                                border: 1px solid #ddd;
                                z-index: 1;
                            }

                            /* Links inside the dropdown */
                            .dropdown-content a {
                                color: black;
                                padding: 12px 16px;
                                text-decoration: none;
                                z-index: 999;
                                display: flex;
                                /* justify-content: center; */
                                align-items: center;
                                /* text-align: center */
                            }

                            /* Change color of dropdown links on hover */
                            .dropdown-content a:hover {
                                background-color: #f1f1f1
                            }

                            .dropdown-content a>p {
                                margin: 0px !important
                            }

                            /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
                            .show {
                                display: block;
                            }
                        </style>
                        <form action="{{ route('fe.search') }}" method="GET"
                            class="js-focus-state max-width-244 ml-auto">
                            @csrf
                            <label class="sr-only" for="searchproduct">Search</label>
                            <div class="input-group border-bottom shadow-none placeholder-1 border-bottom-gray-18">
                                <input type="text"
                                value="dongho"
                                    class="form-control p-1 height-35 text-gray-90 shadow-none font-size-14 border-0 rounded-0 bg-transparent"
                                    name="text" id="myInput" onkeyup="filterFunction()"
                                    onclick="showDropdown()" placeholder="{{ __('search_products') }}"
                                    aria-label="Search for products" aria-describedby="searchProduct1" required
                                    autocomplete="off">
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                                <script>
                                    // Định nghĩa hàm chạy script
                                    function runScript() {
                                        var products = localStorage.getItem('products');

                                        if (products) {
                                            // Chuyển đổi chuỗi JSON thành đối tượng JavaScript
                                            products = JSON.parse(products);

                                            // Lặp qua dữ liệu sản phẩm và tạo các thẻ <a>
                                            $.each(products, function(index, product) {
                                                var truncatedName = product.name.substring(0, 12); // Get the first 12 characters of the product name

                                                var $a = $('<a  >', {
                                                    "data-product": truncatedName,
                                                    "href": '/' + product.slug,
                                                    "html": '<img    data-src="storage/' + product.image_url +
                                                        '" style="width: 30px;object-fit:contain; z-index: 999; height: 30px;" alt="" width="30px" srcset="">' +
                                                        truncatedName + '...' +
                                                        '<p    style="color: red;">' + 'kho:' + product.total_quantity + '</p>'
                                                });

                                                $a.css("display", "flex"); // Set display flex using CSS method

                                                $('#myDropdown').append($a);
                                            });

                                            // Hàm kiểm tra xem phần tử có trong viewport hay không
                                            function isElementInViewport(el) {
                                                var rect = el.getBoundingClientRect();
                                                return (
                                                    rect.top >= 0 &&
                                                    rect.left >= 0 &&
                                                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                                                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                                                );
                                            }

                                            // Hàm tải ảnh khi phần tử được hiển thị trong viewport
                                            function loadImage(element) {
                                                var src = element.getAttribute('data-src');
                                                if (src) {
                                                    element.src = src;
                                                    element.removeAttribute('data-src');
                                                }
                                            }

                                            // Bắt sự kiện scroll để kiểm tra và tải ảnh
                                        input = document.getElementById("myInput");

                                        input.addEventListener('click', function() {
                                                var images = document.querySelectorAll('img[data-src]');
                                                for (var i = 0; i < images.length; i++) {
                                                    var image = images[i];
                                                    if (isElementInViewport(image)) {
                                                        loadImage(image);
                                                    }
                                                }
                                            });
                                        }
                                    }

                                    // Gọi hàm runScript khi trang web đã được tải hoàn toàn
                                    window.addEventListener("load", runScript);
                                </script>

                                <div style="z-index: 99; margin-top: 50px" id="myDropdown" class="dropdown-content">

                                    {{-- <a data-product="Anker 7-in-1 USB C Hub Adapter"
                                        href="https://electro.io.vn/anker-7-in-1-usb-c-hub-adapter">
                                        <img src="https://electro.io.vn/storage/images/1ovpwpx4Q3tJC2tpIq2ZMUTAlaTJAfwjILZqY3z8.png"
                                            style="width: 30px; height: 30px;" alt="" width="20px"
                                            srcset=""> Anker 7-in-1 USB C Hub Adapter</a> --}}


                                </div>
                                <style>
                                    #myDropdown a{
                                        justify-content: space-between;

                                    border-bottom: 1px solid rgba(128, 128, 128, 0.298);
                                    }
                                    #myDropdown a:hover{
                                        border-left: 3px solid #fed700;
                                    }
                                                </style>

                                <script>
                                    function showDropdown() {
                                        var div = document.getElementById("myDropdown");
                                        // div.classList.add("show");
                                    }

                                    function filterFunction() {
                                        var input, filter, ul, li, a, i, count;
                                        input = document.getElementById("myInput");
                                        filter = input.value.toUpperCase();
                                        div = document.getElementById("myDropdown");
                                        a = div.getElementsByTagName("a");
                                        count = 0;
                                        for (i = 0; i < a.length; i++) {
                                            var product = a[i].getAttribute("data-product");
                                            if (product.toUpperCase().indexOf(filter) > -1) {
                                                if (count < 5) { // Chỉ hiển thị khi chưa đạt đến 5 thẻ
                                                    a[i].style.display = "";
                                                    div.classList.add("show");
                                                    count++;
                                                } else {
                                                    a[i].style.display = "none"; // Ẩn các thẻ sau khi đã đạt đến 5 thẻ
                                                }
                                            } else {
                                                a[i].style.display = "none";
                                            }
                                        }
                                    }

                                    // Hide dropdown when clicking outside the input
                                    window.addEventListener("click", function(event) {
                                        var input = document.getElementById("myInput");
                                        var div = document.getElementById("myDropdown");
                                        if (event.target !== input && event.target !== div) {
                                            div.classList.remove("show");
                                        }
                                    });
                                </script>
                                <div class="input-group-append">
                                    <button class="btn btn-primary height-35 p-1 rounded-right-pill" type="submit"
                                    aria-label="Search for products" aria-describedby="searchProduct1"  id="searchProduct1">
                                        <span class="ec ec-search font-size-20"></span>
                                    </button>
                                </div>
                            </div>
                        </form>



                    </div>


                    <!-- End Search Bar -->
                    <!-- Header Icons -->
                    <div class="col text-right pl-0 pl-xl-3 position-static col-xl-2gdot5">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker"
                                        class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary"
                                        href="javascript:;" role="button" data-toggle="tooltip"
                                        data-placement="top" title="Search" aria-controls="searchClassic"
                                        aria-haspopup="true" aria-expanded="false"
                                        data-unfold-target="#searchClassic" data-unfold-type="css-animation"
                                        data-unfold-duration="300" data-unfold-delay="300"
                                        data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
                                        data-unfold-animation-out="fadeOut">
                                        <span class="ec ec-search"></span>
                                    </a>

                                    <!-- Input -->
                                    <div id="searchClassic"
                                        class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2"
                                        aria-labelledby="searchClassicInvoker">
                                        <form class="js-focus-state input-group px-3">
                                            <input class="form-control" type="search" placeholder="Search Product">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button"><i
                                                        class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->
                                <li class="col d-none d-xl-block"><a href="{{ route('frontend.order.list') }}"
                                        class="text-gray-90" data-toggle="tooltip" data-placement="top"
                                        title="Hóa đơn">
                                        <img style="height: 26px; width: 26px"
                                            src="{{ asset('client/img/order-icon.png') }}" alt="">
                                    </a></li>
                                <li class="col d-none d-xl-block"><a href="{{ route('frontend.wishlist.list') }}"
                                        class="text-gray-90" data-toggle="tooltip" data-placement="top"
                                        title="Yêu thích"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                <li class="col d-xl-none px-2 px-sm-3"><a
                                        href="{{ route('frontend.myaccount.dashboard') }}" class="text-gray-90"
                                        data-toggle="tooltip" data-placement="top" title="My Account"><i
                                            class="font-size-22 ec ec-user"></i></a></li>
                                <li class="col pr-xl-0 px-2 px-sm-3 mr-4">
                                    <a href="{{ route('admin.cart.list') }}"
                                        class="text-gray-90 position-relative d-flex " data-toggle="tooltip"
                                        data-placement="top" title="Giỏ hàng">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span class="bg-lg-down-black width-22 height-22 bg-white position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">
                                            {{ Session::has('cart_count') ? Session::get('cart_count') : 0 }}


                                        </span>
                                    </a>
                                </li>
                                <li class="col pr-xl-0 px-2 px-sm-3">
                                    <a href="{{ route('frontend.wallet') }}"
                                        style="display: flex; flex-direction: row" data-toggle="tooltip"
                                        data-placement="top" title="Ví ảo">
                                        <button type="button" class="btn btn-secondary"
                                            style="border-radius: 5px !important;padding: 5px !important; color: #fff">
                                            <div style="display: flex">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff"
                                                    version="1.1" id="Capa_1" width="20px" height="20px"
                                                    viewBox="0 0 969.486 969.486" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M806.582,235.309L766.137,87.125l-137.434,37.51L571.451,9.072L114.798,235.309H0v725.105h907.137V764.973h62.35v-337.53    h-62.352V235.309H806.582z M718.441,170.63l17.654,64.68h-52.561h-75.887h-126.19l111.159-30.339l66.848-18.245L718.441,170.63z     M839.135,892.414H68V522.062v-129.13v-10.233v-69.787v-9.602h35.181h27.538h101.592h409.025h75.889h37.43h35.242h35.244h13.994    v51.272v72.86h-15.357h-35.244h-87.85H547.508h-55.217v27.356v75.888v8.758v35.244v35.244v155.039h346.846v127.441H839.135z     M901.486,696.973h-28.352h-34H560.291V591.375v-35.244v-35.244v-23.889v-1.555h3.139h90.086h129.129h56.492h34h4.445h23.904    V696.973z M540.707,100.191l21.15,42.688l-238.955,65.218L540.707,100.191z" />
                                                            <polygon
                                                                points="614.146,564.57 614.146,576.676 614.146,631.152 680.73,631.152 680.73,564.57 658.498,564.57   " />
                                                        </g>
                                                    </g>
                                                </svg>:
                                                <span style="display: flex !important; flex-direction: row !important"
                                                    class="d-none d-xl-block font-weight-bold font-size-16 #fff ml-3">{{ Session::get('wallet') ? Session::get('wallet') : 0 }}$
                                                </span>
                                            </div>
                                        </button>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Contact-Logo-Search-header-icons -->

        <!-- Primary-menu -->
        <div class="d-none d-xl-block container">
            <div class="py-1">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                        <ul class="navbar-nav u-header__navbar-nav justify-content-center">
                            <!-- Home -->
                            <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut">
                                <a id="HomeMegaMenu" class="nav-link u-header__nav-link  "
                                    href="{{ route('home') }}" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="HomeSubMenu">{{ __('home') }}</a>
                            </li>
                            <!-- End Home -->
                            <!-- Pages -->
                            <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                                <a id="homeMegaMenu" class="nav-link u-header__nav-link  "
                                    href="{{ route('fe.shop') }}" aria-haspopup="true"
                                    aria-expanded="false">{{ __('shop') }}</a>
                            </li>
                            <!-- End Pages -->

                            <!-- Blog -->
                            <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut">
                                <a id="blogMegaMenu" class="nav-link u-header__nav-link  "
                                    href="{{ route('fe.blog') }}" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="blogSubMenu">{{ __('blog') }}</a>

                                <!-- Blog - Submenu -->

                                <!-- End Submenu -->
                            </li>
                            <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut">
                                <a id="blogMegaMenu" class="nav-link u-header__nav-link  "
                                    href="{{ route('admin.cart.list') }}" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="blogSubMenu">{{ __('cart') }}</a>

                                <!-- Blog - Submenu -->

                                <!-- End Submenu -->
                            </li>
                            <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut">
                                <a id="blogMegaMenu" class="nav-link u-header__nav-link  "
                                    href="{{ route('frontend.wishlist.list') }}" aria-haspopup="true"
                                    aria-expanded="false" aria-labelledby="blogSubMenu">{{ __('wishlist') }}</a>

                                <!-- Blog - Submenu -->

                                <!-- End Submenu -->
                            </li>
                            <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut">
                                <a id="blogMegaMenu" class="nav-link u-header__nav-link  "
                                    href="{{ route('frontend.order.list') }}" aria-haspopup="true"
                                    aria-expanded="false" aria-labelledby="blogSubMenu">{{ __('order') }}</a>

                                <!-- Blog - Submenu -->

                                <!-- End Submenu -->
                            </li>
                            <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut">
                                <a id="blogMegaMenu" class="nav-link u-header__nav-link  "
                                    href="{{ route('frontend.myaccount.dashboard') }}" aria-haspopup="true"
                                    aria-expanded="false" aria-labelledby="blogSubMenu">{{ __('profile') }}</a>

                                <!-- Blog - Submenu -->

                                <!-- End Submenu -->
                            </li>
                            <!-- End Blog -->

                            <!-- Features -->

                            <!-- End Features -->

                            <!-- About Us -->
                            <li class="nav-item u-header__nav-item">
                                <a class="nav-link u-header__nav-link" href="{{ route('frontend.about') }}"
                                    aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="AboutUsSubMenu">{{ __('about_us') }}</a>
                            </li>
                            <!-- End About Us -->

                            <!-- Contact Us -->
                            <li class="nav-item u-header__nav-item">
                                <a class="nav-link u-header__nav-link" href="{{ route('frontend.contact.view') }}"
                                    aria-haspopup="true" aria-expanded="false">{{ __('contact_us') }}</a>
                            </li>
                            <!-- End Contact Us -->
                        </ul>
                    </div>
                    <!-- End Navigation -->
                </nav>
                <!-- End Nav -->
            </div>
        </div>
        <!-- End Primary-menu -->
    </div>
</header>
<!-- ========== END HEADER ========== -->
