<header>
    <!-- Header desktop -->
    <nav class="container-header-desktop">
        <div class="top-bar">
            <div class="content-topbar container flex-sb-c h-full">
                <div class="size-w-0 flex-wr-s-c">
                    <div class="t1-s-1 cl-13 m-r-50">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </span>
                        @foreach (App\Models\Information::where('type','address')->get() as $item)
                            <span>{{ $item->info }}</span>
                        @endforeach

                    </div>

                    <div class="t1-s-1 cl-13 m-r-50">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        @foreach (App\Models\Information::where('type','phone')->get() as $item)
                            <span>{{ $item->info }},&nbsp;</span>
                        @endforeach
                    </div>

                    <div class="t1-s-1 cl-13 m-r-50">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </span>
                        <span>Mon-Sat 09:00 am - 17:00 pm/Sunday CLOSE</span>
                    </div>
                </div>

                <div class="text-nowrap">
                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-facebook-official"></i>
                    </a>

                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-google-plus"></i>
                    </a>

                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <div class="limiter-menu-desktop container">
                <!-- Logo desktop -->
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('frontend/images/icons/logo-01.png') }}" alt="LOGO"></a>
                </div>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu respon-sub-menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>

                        <li>
                            <a href="about.html">About Us</a>
                        </li>

                        <li>
                            <a href="services-list.html">Services</a>
                            <ul class="sub-menu">
                                <li><a href="services-list.html">Services List</a></li>
                                <li>
                                    <a href="#">Services Detail</a>

                                    <ul class="sub-menu">
                                        <li><a href="services-detail-01.html">Services Detail v1</a></li>
                                        <li><a href="services-detail-02.html">Services Detail v2</a></li>
                                        <li><a href="services-detail-03.html">Services Detail v3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="news-grid.html">News</a>
                            <ul class="sub-menu">
                                <li><a href="news-grid.html">News Grid</a></li>
                                <li><a href="news-list.html">News List</a></li>
                                <li><a href="news-detail.html">News Detail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="projects-grid.html">Projects</a>
                            <ul class="sub-menu">
                                <li><a href="projects-grid.html">Projects Grid</a></li>
                                <li>
                                    <a href="#">Projects Detail</a>

                                    <ul class="sub-menu">
                                        <li><a href="projects-detail-01.html">Projects Detail v1</a></li>
                                        <li><a href="projects-detail-02.html">Projects Detail v2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="shop-grid.html">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="contact.html">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Mobile -->
    <nav class="container-header-mobile">
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="{{ asset('frontend/images/icons/logo-01.png') }}" alt="LOGO"></a>
            </div>


            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <div class="menu-mobile">
            <ul class="top-bar-m p-l-20 p-tb-8">
                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </span>
                        <span>379 5Th Ave New York, Nyc 10018</span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        <span>(+1) 96 716 6879</span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </span>
                        <span>Mon-Sat 09:00 am - 17:00 pm/Sunday CLOSE</span>
                    </div>
                </li>

                <li>
                    <div>
                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-facebook-official"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-google-plus"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
