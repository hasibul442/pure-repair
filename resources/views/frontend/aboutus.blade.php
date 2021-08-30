@extends('frontend.layout.master')
@section('title', 'About Us')
@section('content')
<section class="bg-img1 kit-overlay1">
<div class="container size-h-3 p-tb-30 flex-col-c-c">
    <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
        About Us
    </h2>

    <div class="flex-wr-c-c">
        <a href="{{ route('home') }}" class="breadcrumb-item">
            Home
        </a>

        <span class="breadcrumb-item">
            About Us
        </span>
    </div>
</div>
</section>

<section class="bg-0 p-t-92 p-b-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 p-b-35">
                <!-- Title section -->
                <div class="flex-col-c-s p-b-35">
                    <h3 class="t1-b-1 cl-3 m-b-11">
                        Mission & Vision
                    </h3>

                    <div class="size-a-2 bg-3"></div>
                </div>

                <div class="p-r-20 p-r-0-sr767">
                    <p class="t1-s-2 cl-6 m-b-10">
                        <span class="t1-s-5 cl-3"></span> It is our goal to provide innovative repair services for cell phones, tablets, Note and more; providing excellent customer service and quality repair with a quick turnaround. We strive to get you back to normal use of your device as soon as possible.
                    </p>

                    {{-- <p class="t1-s-2 cl-6 m-b-10">
                        <span class="t1-s-5 cl-3">In the future:</span> Leave your information and email address. We will call back and advise you. Duis aute irure dolor in reprehenderit in voluptate. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.
                    </p> --}}
                </div>
            </div>

            <div class="col-sm-10 col-md-6 p-b-35">
                <!-- Title section -->
                <div class="flex-col-c-s p-b-8">
                    <h3 class="t1-b-1 cl-3 m-b-11">
                        Our Stats
                    </h3>

                    <div class="size-a-2 bg-3"></div>
                </div>

                <!-- Progress -->
                <div class="wrap-progress size-w-6 w-full-sr767">
                    <span class="dis-block t1-s-4 cl-3 p-b-8 p-t-26">
                        Service Guarantee
                    </span>

                    <div class="progress-item">
                        <div class="progress-inner txt-s-113 cl0 txt-right p-r-10" data-percent="100%"></div>
                    </div>

                    <span class="dis-block t1-s-4 cl-3 p-b-8 p-t-26">
                        Client Suports
                    </span>

                    <div class="progress-item">
                        <div class="progress-inner txt-s-113 cl0 txt-right p-r-10" data-percent="100%"></div>
                    </div>

                    <span class="dis-block t1-s-4 cl-3 p-b-8 p-t-26">
                        Review
                    </span>

                    <div class="progress-item">
                        <div class="progress-inner txt-s-113 cl0 txt-right p-r-10" data-percent="100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-12 p-t-92 p-b-70">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                Why Chosse Us
            </h3>

            <div class="size-a-2 bg-3"></div>
        </div>

        <!--  -->
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                <div class="block1 trans-04">
                    <div class="block1-show trans-04">
                        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                            <img class="symbol-dark trans-04" src="{{ asset('frontend/images/icon/whyus/1.png') }}" alt="IMG">
                            <img class="symbol-light ab-t-c op-00 trans-04" src="{{ asset('frontend/images/icon/whyus/11.png') }}" alt="IMG">
                        </div>

                        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                            Premium Repair
                        </h4>
                    </div>

                    <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                        <p class="t1-s-2 cl-12 txt-center p-b-26">
                            Top quality certified parts
                        </p>


                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                <div class="block1 trans-04">
                    <div class="block1-show trans-04">
                        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                            <img class="symbol-dark trans-04" src="{{ asset('frontend/images/icon/whyus/2.png') }}"" alt="IMG">
                            <img class="symbol-light ab-t-c op-00 trans-04" src="{{ asset('frontend/images/icon/whyus/22.png') }}"" alt="IMG">
                        </div>

                        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">Instant Mobile Repair
                        </h4>
                    </div>

                    <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                        <p class="t1-s-2 cl-12 txt-center p-b-26">
                            Mobile Repair on the Spot in Pure Repair Store
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                <div class="block1 trans-04">
                    <div class="block1-show trans-04">
                        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                            <img class="symbol-dark trans-04" src="{{ asset('frontend/images/icon/whyus/3.png') }}"" alt="IMG">
                            <img class="symbol-light ab-t-c op-00 trans-04" src="{{ asset('frontend/images/icon/whyus/33.png') }}"" alt="IMG">
                        </div>

                        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                            Skilled Technicians
                        </h4>
                    </div>

                    <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                        <p class="t1-s-2 cl-12 txt-center p-b-26">
                            Trained & Qualified Professionals
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                <div class="block1 trans-04">
                    <div class="block1-show trans-04">
                        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                            <img class="symbol-dark trans-04" src="{{ asset('frontend/images/icon/whyus/4.png') }}"" alt="IMG">
                            <img class="symbol-light ab-t-c op-00 trans-04" src="{{ asset('frontend/images/icon/whyus/44.png') }}"" alt="IMG">
                        </div>

                        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                            Guaranteed Safety
                        </h4>
                    </div>

                    <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                        <p class="t1-s-2 cl-12 txt-center p-b-26">
                            Total Device & Data Security
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
