

<div class="container ">
    <div class="flex-col-c-c p-b-50">
        <h3 class="t1-b-1 cl-3 txt-center m-b-11">
            New Products
        </h3>

        <div class="size-a-2 bg-3"></div>
    </div>
    <div class="owl-carousel mb-2">
        @foreach (App\Models\Product::where('condition','new')->get() as $product)
        <div class="card">
            <div class="card-body">
                <div class="flex-col-c-c pos-relative" data-sale="Sale" data-new="New">
                    <div class="ab-t-l w-full z-index-100 flex-wr-e-c p-all-10 pointer-e-none">
                        <span class="flex-c-c size-a-24 p-rl-5 borad-5 bg-11 t1-s-5 cl-0 text-uppercase m-l-10">
                            @if($product->condition == 'new')New
                            @elseif($product->condition == 'hot')Hot
                            @elseif($product->condition == 'default')Default

                            @endif
                        </span>
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
        @endforeach
    </div>

</div>

<script>
    $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    center: true,
    autoplay:true,
    autoplayTimeout:2000,
    items:1,
    loop:true,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
  });
});
</script>

