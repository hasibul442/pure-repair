@extends('frontend.layout.master')
@section('title', 'Service')
@section('content')

<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-09.jpg);">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            Shop
        </h2>

        <div class="flex-wr-c-c">
            <a href="index.html" class="breadcrumb-item">
                Home
            </a>

            <a href="shop-grid.html" class="breadcrumb-item">
                Shop
            </a>

            <span class="breadcrumb-item">
                Shop Detail
            </span>
        </div>
    </div>
</section>

<!-- Content -->
<div class="bg-0 p-t-85 p-b-65">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 p-b-30">
                <img class="max-s-full img-fluid" src="{{ asset('backend/assets/images/product/'.$data->image) }}" style="height: 300px;" alt="IMG">
            </div>

            <div class="col-sm-10 col-md-6 p-b-30">
                <div class="p-l-15 flex-col-s-s p-l-0-sr767">
                    <h4 class="t1-m-5 cl-3 text-uppercase m-b-8 js-name1">
                        {{ $data->p_name }}
                    </h4>

                    <span class="t1-m-7 cl-6 m-b-14">
                        <span class="m-r-12">
                            Brand:  <b class="text-primary">{{ $data->brand->name }}</b>
                        </span>
                        <br>
                        <span class="m-r-12">
                            Tk: {{ $data->price }}
                        </span>
                        <br>
                        <span class="m-r-12">
                            Cindition: @if($data->condition == 'new')New
                            @elseif($data->condition == 'hot')Hot
                            @elseif($data->condition == 'default')Default

                            @endif
                        </span>
                    </span>

                    <p class="t1-s-2 cl-6 m-b-15">
                        {{ $data->description }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Tab02 -->
        <div class="tab02 p-t-20">


        </div>
    </div>
</div>
@include('frontend.include.newproduct')
@endsection
