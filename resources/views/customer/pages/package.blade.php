@extends('customer.master')

@section('index')
	<div id="fh5co-page">
		<header id="fh5co-header" role="banner">
			<div class="container">
				<div class="row">
					<div class="header-inner">
						<h1><a href="{{route('home')}}">Balipenidaview<span>.</span></a></h1>
						<nav role="navigation">
							<ul>
								<li><a href="{{route('home')}}">Home</a></li>
								<li class="active"><a href="{{route('package')}}">Package</a></li>
								<li><a href="{{route('gallery')}}">Gallery</a></li>
								<li><a href="{{route('contact')}}">Contact</a></li>
								<li class="cta"><a href="{{route('booking')}}">Booking</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
	@include('customer/template/slide')
	<div id="best-deal">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
					<h2>Packages Tour Nusa Penida</h2>
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/halfday-west.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
						</figure>
						<div class="paket-padding text-center">
							<h3>Half Day West Tour</h>
					    </div>
						<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
							<p><a href="{{ route('halfdaywest') }}" class="btn btn-primary with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/halfday-east.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
						</figure>
						<div class="paket-padding text-center">
							<h3>Half Day Tour East</h>
					    </div>
						<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
							<p><a href="" class="btn btn-primary with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
						</div>
					</div>

				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/halfday-snor.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
						</figure>
						<div class="paket-padding text-center">
							<h3>Half Day Snorkeling Tour</h>
					    </div>
						<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
							<p><a href="" class="btn btn-primary with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/1d1n.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
						</figure>
						<div class="paket-padding text-center">
							<h3>1D1N Tour</h>
    					</div>
						<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
							<p><a href="" class="btn btn-primary with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/1d1n-snor.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
						</figure>
						<div class="paket-padding text-center">
							<h3>1D1N & Snorkeling Tour</h>
					    </div>
						<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
							<p><a href="" class="btn btn-primary with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
						</div>
					</div>

				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/2d1n.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
						</figure>
						<div class="paket-padding text-center">
							<h3>2D1N Tour </h>
					    </div>
						<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
							<p><a href="" class="btn btn-primary with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>


				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/2d1n-snor.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
						</figure>
						<div class="paket-padding text-center">
							<h3>2D1N & Snorkeling Tour</h>
    					</div>
						<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
							<p><a href="" class="btn btn-primary with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/3d2n.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
						</figure>
						<div class="paket-padding text-center">
							<h3>3D2N Tour</h>
    					</div>
						<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
							<p><a href="" class="btn btn-primary with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fh5co-cta" style="background-image: url(images/slide_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
				<h3>Have Planning to Nusa Penida ?</h3>
				<p><a href="{{route('booking')}}" class="btn btn-primary btn-outline with-arrow">Lets Book now! <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>
	@include('customer/template/footer')
@endsection
