@extends('frontend.layout.master')
@section('title', 'Service Details')
@section('content')
<section class="bg-0 p-t-100 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-50">
                <div class="p-r-35 p-r-0-sr991">
                    <img class="max-s-full m-b-30" src="{{ asset('/backend/assets/images/service/'.$data->image) }}" alt="IMG">

                    <div class="p-b-14">
                        <h3 class="t1-m-5 cl-3 m-b-13">
                            {{ $data->name }}
                        </h3>

                        <p class="t1-s-2 cl-6 m-b-9">
                            {{ $data->description }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 p-b-50">
                <!-- Rightbar -->
                <div class="p-b-30">
                    <div class="bg-11 p-all-30">
                        <p class="t1-m-1 cl-0 m-b-13">
                            How can we help you?
                        </p>

                        <p class="t1-s-2 cl-15 m-b-25">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum model text.
                        </p>

                        <a href="contact.html" class="d-inline-flex flex-c-c size-a-1 bg-0 t1-s-2 cl-6 text-uppercase hov-btn1 trans-02 p-rl-10">
                            <i class="fa fa-phone-square m-r-6"></i>
                            Contacts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
