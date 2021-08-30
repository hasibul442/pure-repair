@extends('frontend.layout.master')
@section('title', 'Contact Us')
@section('content')
	<!-- Title page -->
	<section class="bg-img1 kit-overlay1">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				Contact Us
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{ route('home') }}" class="breadcrumb-item">
					Home
				</a>

				<span class="breadcrumb-item">
					Contact Us
				</span>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section class="bg-0 p-t-95 p-b-40">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-6 p-b-60">
                    @if(Session::get('message_sent'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message_sent') }}
                        </div>
                    @endif
					<h3 class="t1-m-5 cl-3 m-b-44">
						Send Us A Message
					</h3>

					<form class="validate-form" action="{{ route('contact.mail') }}" method="post" enctype="multipart/form-data" name="contact">
                        @csrf
						<div class="m-b-15 validate-input" data-validate = "Name is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="Your Name">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="Your Email">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Phone is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="Phone Number">
						</div>

						<div class="m-b-30 validate-input" data-validate = "Message is required">
							<textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="msg" placeholder="Your Message"></textarea>
						</div>

						<button type="submit" class="btn btn-primary">
							Send Email
						</button>
					</form>
				</div>

				<div class="col-sm-10 col-md-6 p-b-60">
					<div class="p-l-30 p-l-0-sr767">
						<h3 class="t1-m-5 cl-3 m-b-38">
							Contact Info
						</h3>

						<ul class="p-t-11">
							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
                                    @foreach (App\Models\Information::where('type','address')->get() as $item)
                                        <span>{{ $item->info }}</span>
                                    @endforeach
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
                                    @foreach (App\Models\Information::where('type','email')->get() as $item)
                                    <span>{{ $item->info }}</span>
                                @endforeach
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
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
		</div>
	</section>

    <div class="map-responsive">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1479741345656!2d90.3900484149812!3d23.742102084593494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8be4acbb045%3A0xdfb91d95ff995e2d!2sMotalib%20Plaza%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1630326784107!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
@endsection
