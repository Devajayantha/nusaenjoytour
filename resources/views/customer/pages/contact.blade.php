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
							<li><a href="{{route('package')}}">Package</a></li>
							<li><a href="{{route('gallery')}}">Gallery</a></li>
							<li class="active"><a href="{{route('contact')}}">Contact</a></li>
							<li class="cta"><a href="{{route('booking')}}">Booking</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

<div class="fh5co-page-title" style="background-image: url('{{asset('/images/landscape/photo14.jpg')}}');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 animate-box">
				<h1><span class="colored">Contact</span> Us</h1>
			</div>
		</div>
	</div>
</div>


<div class="fh5co-contact animate-box">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3>Contact Info.</h3>
				<ul class="contact-info">
					<li><i class="icon-map"></i>Br. Semaya, Nusa Penida, Klungkung, Bali</li>
					<li><i class="icon-phone"></i>+62 813-3862-1187</li>
					<li><i class="icon-envelope"></i><a href="#">info@balipenidaview.com</a></li>
					<li><i class="icon-globe"></i><a href="#">www.balipenidaview.com</a></li>
				</ul>
			</div>
			<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<div class="row">
					<form method="post" action="/contact">
						{{csrf_field()}}
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="name" type="text" name="name" >
							@if ($errors->has('name'))
							<span class="invalid-feedback">
								<strong style="color:red;">{{ $errors->first('name') }}</strong>
							</span>
							@endif
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Email" type="text" name="email">
								@if ($errors->has('email'))
								<span class="invalid-feedback">
									<strong style="color:red;">{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" ></textarea>
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

<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>
@include('customer/template/footer')
</div>
@endsection
