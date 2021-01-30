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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="..." alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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

    <div class="fh5co-contact animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Add Review</h3>
                </div>
                <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                    <div class="row">
                        <form method="post" action="{{ route('dashboard.comment.create') }}" >
                            @csrf
                            @method('post')
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Full Name" type="text" name="name" required>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong style="color:red;">{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
                                    @if ($errors->has('message'))
                                    <span class="invalid-feedback">
                                        <strong style="color:red;">{{ $errors->first('message') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" value="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('customer/template/footer')
@endsection
