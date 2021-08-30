@extends('frontend.layout.master')
@section('title', 'All Product')
@section('content')

<div class="bg-0 p-t-95 p-b-50">
    <div class="p-rl-50 p-rl-15-sr1199">
        <div class="row">
            @foreach ($product as $product)
            <div class="col-sm-3">

        <div class="card">
            <div class="card-body">
                <div class="flex-col-c-c pos-relative" data-sale="Sale" data-new="New">
                    <div class="ab-t-l w-full z-index-100 flex-wr-e-c p-all-10 pointer-e-none">

                            @if($product->condition == 'new')
                                <span class="flex-c-c size-a-24 p-rl-5 borad-5 bg-11 t1-s-5 cl-0 text-uppercase m-l-10">New</span>
                            @elseif($product->condition == 'hot')<span class="flex-c-c size-a-24 p-rl-5 borad-5 bg-danger bg-11 t1-s-5 cl-0 text-uppercase m-l-10">Hot</span>
                            @elseif($product->condition == 'default')<span class="flex-c-c size-a-24 p-rl-5 borad-5 bg-11 t1-s-5 cl-0 text-uppercase m-l-10" style="display: none">New</span>

                            @endif

                    </div>

                    <a href="{{ url('product/'.$product->id.'/'.$product->slug) }}" class="hov-img0 of-hidden w-full m-b-20">
                        <img src="{{ asset('backend/assets/images/product/'.$product->image) }}" style="height:200px" alt="IMG">
                    </a>

                    <a href="{{ url('product/'.$product->id.'/'.$product->slug) }}" class="t1-m-7 text-uppercase cl-3 hov-link2 trans-02 txt-center">
                        {{ substr($product->p_name, 6,20) }}
                    </a>

                    <span class="t1-m-2 cl-6">
                     <span class="p-rl-6">
                        {{ $product->price }} Tk
                        </span>
                    </span>
                </div>
            </div>
        </div>

            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection
