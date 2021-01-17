@extends('customer.master')

@section('index')

	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="header-inner">
					<h1><a href="">Penidaenjoytour<span>.</span></a></h1>
					<nav role="navigation">
						<ul>
							<li  class="active"><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('package') }}">Package</a></li>
							<li><a href="{{ route('gallery') }}">Gallery</a></li>
							<li><a href="{{ route('contact') }}">Contact</a></li>
							<li class="cta"><a href="{{ route('booking') }}">Booking</a></li>
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
					<h2>Popular Packages That Are Often Ordered</h2>
					<p>We have many package tour service going Nusa Penida. If you interest , lets contact us and get special cost from us</p>
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">


					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/halfday-west.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="{{ route('halfdaywest') }}" class="tag">Recommend</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="">Half Day Tour West Nusa Penida</a></h3>
							<div class="price-status">
		                 	<span class="price"> <span class="per">Start From-</span>Rp.350.000</span>
		               </div>
		               <p>Most popular package tour when this tour start from 07.30 until 17.00. Destination will visitting are Kelingking Beach, Broken Beach, Angel Billabong and Crystal Bay </p>
	            	</div>
					<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
						<p><a href="{{ route('halfdaywest') }}" class="btn btn-primary btn-outline with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
					</div>
					</div>


				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/halfday-snor.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">Recommend</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="">Half Day & Snorkeling Tour Nusa Penida</a></h3>
							<div class="price-status">
		                 	<span class="price"> <span class="per">Start From-</span>Rp.375.000</span>
		               </div>
		               <p>Most popular package tour in rute west Nusa Penida include snorkeling in Crystal Bay, Manta Point, and Gamat Bay. Tour starting from 07.00 until 17.00</p>
	            	</div>
					<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
						<p><a href="{{ route('halfdaysnor') }}" class="btn btn-primary btn-outline with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
					</div>
					</div>

				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="{{ asset('images/gallery/paket-tour/2d1n.jpg')}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">Recommend</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">Two Days One Night Tour Nusa Penida</a></h3>
							<div class="price-status">
		                 	<span class="price"> <span class="per">Start From-</span>Rp.900.000</span>
		               </div>
		               <p>Most popular package tour when rute tour day 1 in West and day 2 in East Nusa Penida. This package include hotel for stay overnight. Get special price from us when book overnight.</p>
	            	</div>
					<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
						<p><a href="{{ route('twodayonenight') }}" class="btn btn-primary btn-outline with-arrow btn-recommend">Details <i class="icon-arrow-right"></i></a></p>
					</div>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="fh5co-cta" >
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
				<h3>Have Planning to Nusa Penida ?</h3>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow">Lets Book now! <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>

    @include('customer/template/footer')
@endsection
