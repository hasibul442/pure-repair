@extends('frontend.layout.master')
@section('title', 'Products')
@section('content')
<!-- Content -->

<div class="bg-0 p-t-95 p-b-50">
    <div class="p-rl-50 p-rl-15-sr1199">

        <div class="row isotope-grid">
            @foreach ($products as $item )
            <div class="col-sm-6 col-lg-3 p-b-45 isotope-item business-n">
                <div class="flex-col-s-c">
                    <div class="w-full pos-relative wrap-pic-w m-b-16">
                        <img class="img-fluid" src="{{ asset('backend/assets/images/product/'.$item->image) }}" style="height: 300px; width:500px" alt="IMG">

                        <div class="s-full ab-t-l flex-col-c-c hov-1 p-tb-30 p-rl-15">
                            <a href="{{ url('product/'.$item->id.'/'.$item->slug) }}" class="size-a-15 d-inline-flex flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-10 hov-1-2">
                                View Details
                            </a>
                            {{-- <br>
                            <a href="projects-detail-01.html" class="size-a-15 d-inline-flex flex-c-c t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-10 hov-1-2">
                                {{ $item->p_name }}
                            </a> --}}
                        </div>
                    </div>

                    <a href="{{ url('product/'.$item->id.'/'.$item->slug) }}" class="t1-m-1 cl-3 hov-link2 trans-02">
                        {{ $item->p_name }}
                    </a>
                    <br>
                    <p class="text-info">{{ $item->price }} tk</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
