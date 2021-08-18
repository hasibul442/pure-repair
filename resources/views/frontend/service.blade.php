@extends('frontend.layout.master')
@section('title', 'Service')
@section('content')
<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-08.jpg);">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            Projects
        </h2>

        <div class="flex-wr-c-c">
            <a href="index.html" class="breadcrumb-item">
                Home
            </a>

            <span class="breadcrumb-item">
                Projects
            </span>
        </div>
    </div>
</section>


<!-- Content -->
<div class="bg-0 p-t-95 p-b-50">
    <div class="p-rl-50 p-rl-15-sr1199">

        <div class="row isotope-grid">
            @foreach (App\Models\Service::get() as $item )
            <div class="col-sm-6 col-lg-4 p-b-45 isotope-item business-n">
                <div class="flex-col-s-c">
                    <div class="w-full pos-relative wrap-pic-w m-b-16">
                        <img class="img-fluid" src="{{ asset('backend/assets/images/service/'.$item->image) }}" style="height: 300px; width:200px" alt="IMG">

                        <div class="s-full ab-t-l flex-col-c-c hov-1 p-tb-30 p-rl-15">
                            <a href="projects-detail-01.html" class="size-a-15 d-inline-flex flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-10 hov-1-2">
                                View Projects
                            </a>
                        </div>
                    </div>

                    <a href="projects-detail-01.html" class="t1-m-1 cl-3 hov-link2 trans-02">
                        System Expansion
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
