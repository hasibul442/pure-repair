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
                        <span>Tus-Sun 09:00 am - 17:00 pm/Monday CLOSE</span>
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
                    <a href="{{url('/home')}}">
                        <img src="{{ asset('frontend/images/icon/logo/logo.png') }}" alt="LOGO">
                    </a>
                </div>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu respon-sub-menu">
                        <li>
                            <a href="{{url('/home')}}">Home</a>
                        </li>

                        <li>
                            <a href="{{  route('aboutus')  }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{url('/service')}}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('allproduct') }}">Products</a>
                            <ul class="sub-menu">
                                @foreach (App\Models\Category::get() as $item )
                                    <li><a href="{{ url('category/'.$item->id.'/'.$item->cat_name) }}">{{ $item->cat_name }}</a></li>
                                @endforeach

                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('contactus') }}">Contact us</a>
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
                <a href="{{url('/home')}}"><img src="{{ asset('frontend/images/icon/logo/logo.png') }}" alt="LOGO"></a>
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
                        @foreach (App\Models\Information::where('type','address')->get() as $item)
                            <span>{{ $item->info }}</span>
                        @endforeach
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        @foreach (App\Models\Information::where('type','phone')->get() as $item)
                            <span>{{ $item->info }},&nbsp;</span>
                        @endforeach
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </span>
                        <span>Tus-Sun 09:00 am - 17:00 pm/Monday CLOSE</span>
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
