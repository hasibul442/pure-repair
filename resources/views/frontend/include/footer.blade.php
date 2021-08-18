<footer>
    <div class="parallax100 kit-overlay1 p-t-35 p-b-10" style="background-image: url(images/bg-03.jpg);">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-sm-6 col-md-6 col-lg-6 p-b-20">
                    <div class="size-h-1 flex-s-e p-b-6 m-b-18">
                        <a href="#">
                            <img class="max-s-full" src="{{ asset('frontend/images/icons/logo-02.png') }}" alt="IMG">
                        </a>
                    </div>

                    <div>
                        <p class="t1-s-2 cl-13 p-b-17">
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized   the charms of pleasure of.
                        </p>

                        <div class="flex-wr-s-c p-t-10">
                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 p-b-20">
                    <div class="size-h-1 flex-s-e m-b-18">
                        <h4 class="t1-m-3 text-uppercase cl-0">
                            Contact us
                        </h4>
                    </div>

                    <ul>
                        <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                            <span class="size-w-3">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                @foreach (App\Models\Information::where('type','address')->get() as $item)
                                    <span>{{ $item->info }}</span>
                                @endforeach
                            </span>
                        </li>

                        <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                            <span class="size-w-3">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                @foreach (App\Models\Information::where('type','email')->get() as $item)
                                    <span>{{ $item->info }}</span>
                                @endforeach
                            </span>
                        </li>

                        <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                            <span class="size-w-3">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                @foreach (App\Models\Information::where('type','phone')->get() as $item)
                                    <span>{{ $item->info }}<br></span>
                                @endforeach
                            </span>
                        </li>
                    </ul>
                </div>

        </div>
    </div>

    <div class="bg-10">
        <div class="container txt-center p-tb-15">
            <span class="t1-s-2 cl-14">
                Copyright @ <script>document.write(new Date().getFullYear())</script> Designed by <a href="https://www.facebook.com/hasibul.hasan.77582" target="_blank" rel="noopener noreferrer">Mohammad Hasibul Hasan</a> . All rights reserved.
            </span>
        </div>
    </div>
</footer>
