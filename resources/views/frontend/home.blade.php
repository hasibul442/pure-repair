@extends('frontend.layout.master')
@section('title', 'Home')
@section('content')
	<!-- Slide -->
	<section class="slider">
		<div class="rev_slider_wrapper fullwidthbanner-container">
			<div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
				<ul>
					<!-- Slide  -->
                    @foreach ( App\Models\Banner::get() as $item)
                    <li data-transition="slidingoverlayhorizontal">
						<img src="{{ asset('/backend/assets/images/banner/'.$item->image ) }}" alt="IMG-SLIDE" class="rev-slidebg">

						<h2 class="tp-caption tp-resizeme caption-1 text-uppercase"
						data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-visibility="['on', 'on', 'on', 'on']"

					    data-fontsize="['48', '48', '48', '38']"
					    data-lineheight="['58', '58', '58', '58']"
					    data-color="['#FFF']"
					    data-textAlign="['center', 'center', 'center', 'center']"

					    data-x="['center']"
					    data-y="['center']"
					    data-hoffset="['0', '0', '0', '0']"
					    data-voffset="['-83', '-83', '-83', '-93']"

					    data-width="['1200','992','768','480']"
					    data-height="['auto', 'auto', 'auto', 'auto']"
					    data-whitespace="['normal']"

					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[15, 15, 15, 15]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[15, 15, 15, 15]"

					    data-basealign="slide"
    					data-responsive_offset="off"
					    >{{ $item->title }}</h2>

					    <p class="tp-caption tp-resizeme caption-2"
						data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-visibility="['on', 'on', 'on', 'on']"

					    data-fontsize="['30', '30', '30', '25']"
					    data-lineheight="['39', '39', '39', '39']"
					    data-color="['#FFF']"
					    data-textAlign="['center', 'center', 'center', 'center']"

					    data-x="['center']"
					    data-y="['center']"
					    data-hoffset="['0', '0', '0', '0']"
					    data-voffset="['-13', '-13', '-13', '-13']"

					    data-width="['1200','992','768','480']"
					    data-height="['auto', 'auto', 'auto', 'auto']"
					    data-whitespace="['normal']"

					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[15, 15, 15, 15]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[15, 15, 15, 15]"

					    data-basealign="slide"
    					data-responsive_offset="off"
					    >{{ $item->dec }}</p>

					    <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex"
					    data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-x="['center']"
					    data-y="['center']"
					    data-hoffset="['0', '0', '0', '0']"
					    data-voffset="['88', '88', '88', '88']"

					    data-width="['1200','992','768','480']"
					    data-height="['auto']"

					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[10, 10, 10, 10]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[10, 10, 10, 10]"

					    data-basealign="slide"
    					data-responsive_offset="off"
					    >
						    {{-- <a href="#" class="btn1 flex-c-c">
						    	Our project
						    </a>

						    <a href="#" class="btn2 flex-c-c">
						    	Learn more
						    </a> --}}
					    </div>
					</li>
                    @endforeach



				</ul>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section class="bg-0 p-t-92 p-b-60">
		<div class="container">
			<!-- Title section -->
			<div class="flex-col-c-c p-b-50">
				<h3 class="t1-b-1 cl-3 txt-center m-b-11">
					Our Services
				</h3>

				<div class="size-a-2 bg-3"></div>
			</div>

			<!--  -->
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
					<div class="bg-10 h-full">
						<a href="services-detail-01.html" class="hov-img0 of-hidden bg-0">
							<img src="{{ asset('frontend/images/service/S3.jpeg') }}" alt="IMG">
						</a>

						<div class="p-rl-30 p-t-26 p-b-20">
							<h4 class="p-b-9">
								<a href="services-detail-01.html" class="t1-m-1 cl-0 hov-link2 trans-02">
									Fix Mobile Tablet
								</a>
							</h4>

							<p class="t1-s-2 cl-13">
								We Fix Any Kind Of Hardware Problem That Your Phone/Tablat Have
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
					<div class="bg-10 h-full">
						<a href="services-detail-01.html" class="hov-img0 of-hidden bg-0">
							<img src="{{ asset('frontend/images/service/S4.jpg') }}" alt="IMG">
						</a>

						<div class="p-rl-30 p-t-26 p-b-20">
							<h4 class="p-b-9">
								<a href="services-detail-01.html" class="t1-m-1 cl-0 hov-link2 trans-02">
									Mobile Accessories
								</a>
							</h4>

							<p class="t1-s-2 cl-13">
								We Also Provide Best Mobile Accessories
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
					<div class="bg-10 h-full">
						<a href="services-detail-01.html" class="hov-img0 of-hidden bg-0">
							<img src="{{ asset('frontend/images/service/S1.png') }}" alt="IMG">
						</a>

						<div class="p-rl-30 p-t-26 p-b-20">
							<h4 class="p-b-9">
								<a href="services-detail-01.html" class="t1-m-1 cl-0 hov-link2 trans-02">
									Fix Software Problem
								</a>
							</h4>

							<p class="t1-s-2 cl-13">
								Here You Can Find Best Software Solution For Your Mobile.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why chosse us -->
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

	<!-- Testimonials -->
	<section class="parallax100 kit-overlay2 p-t-92 p-b-90" style="background-image: url(images/bg-02.jpg);">
		<div class="container">
			<!-- Title section -->
			<div class="flex-col-c-c p-b-50">
				<h3 class="t1-b-1 cl-0 txt-center m-b-11">
					Testimonials
				</h3>

				<div class="size-a-2 bg-0"></div>
			</div>

			<!-- Slick1 -->
			<div class="wrap-slick1">
				<div class="slide-slick">
					<div class="item-slick p-rl-15 wrap-block3">
						<div class="block3 d-flex">
							<div class="block3-content d-flex">
								<div class="block3-pic wrap-pic-w">
									<img src="{{ asset('frontend/images/ava-01.jpg') }}" alt="IMG">
								</div>

								<div class="block3-text d-flex w-full-sr575">
									<span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Marie Crawford
									</span>

									<span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

									<p class="block3-text-child t1-s-2 cl-13">
										The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick p-rl-15 wrap-block3">
						<div class="block3 d-flex">
							<div class="block3-content d-flex">
								<div class="block3-pic wrap-pic-w">
									<img src="{{ asset('frontend/images/ava-02.jpg') }}" alt="IMG">
								</div>

								<div class="block3-text d-flex w-full-sr575">
									<span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Jerry Alexander
									</span>

									<span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

									<p class="block3-text-child t1-s-2 cl-13">
										The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick p-rl-15 wrap-block3">
						<div class="block3 d-flex">
							<div class="block3-content d-flex">
								<div class="block3-pic wrap-pic-w">
									<img src="{{ asset('frontend/images/ava-01.jpg') }}" alt="IMG">
								</div>

								<div class="block3-text d-flex w-full-sr575">
									<span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Marie Crawford
									</span>

									<span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

									<p class="block3-text-child t1-s-2 cl-13">
										The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick p-rl-15 wrap-block3">
						<div class="block3 d-flex">
							<div class="block3-content d-flex">
								<div class="block3-pic wrap-pic-w">
									<img src="{{ asset('frontend/images/ava-02.jpg') }}" alt="IMG">
								</div>

								<div class="block3-text d-flex w-full-sr575">
									<span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Jerry Alexander
									</span>

									<span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

									<p class="block3-text-child t1-s-2 cl-13">
										The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick p-rl-15 wrap-block3">
						<div class="block3 d-flex">
							<div class="block3-content d-flex">
								<div class="block3-pic wrap-pic-w">
									<img src="{{ asset('frontend/images/ava-01.jpg') }}" alt="IMG">
								</div>

								<div class="block3-text d-flex w-full-sr575">
									<span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Marie Crawford
									</span>

									<span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

									<p class="block3-text-child t1-s-2 cl-13">
										The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick p-rl-15 wrap-block3">
						<div class="block3 d-flex">
							<div class="block3-content d-flex">
								<div class="block3-pic wrap-pic-w">
									<img src="{{ asset('frontend/images/ava-02.jpg') }}" alt="IMG">
								</div>

								<div class="block3-text d-flex w-full-sr575">
									<span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Jerry Alexander
									</span>

									<span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

									<p class="block3-text-child t1-s-2 cl-13">
										The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="wrap-dot-slick p-t-70"></div>
			</div>
		</div>
	</section>

	<!-- Sign up -->
	<section class="bg-0 p-t-92 p-b-90">
		<div class="container">
			<!-- Title section -->
			<div class="flex-col-c-c p-b-44">
				<h3 class="t1-b-1 cl-3 txt-center m-b-11">
					Sign Up
				</h3>

				<div class="size-a-2 bg-3"></div>
			</div>

			<!--  -->
			<div class="size-w-1 m-rl-auto">
				<p class="size-w-2 m-rl-auto t1-s-2 cl6 txt-center p-b-13">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua
				</p>

				<form class="flex-wr-c-c">
					<input class="size-a-5 bo-all-1 bcl-11 t1-m-2 cl-6 plh-6 p-rl-20 w-full-sr575 m-tb-10" type="text" name="email" placeholder="email@example.com">

					<button class="size-a-6 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 m-tb-10">
						Subscribe
					</button>
				</form>
			</div>
		</div>
	</section>

@endsection
