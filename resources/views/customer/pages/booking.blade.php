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
							<li><a href="{{route('contact')}}">Contact</a></li>
							<li class="cta"><a href="{{route('booking')}}">Booking</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

<div class="fh5co-page-title" style="background-image: url('{{asset('images/landscape/photo2.jpg')}}');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 animate-box">
				<h1><span class="colored">Booking </span>Now </h1>
			</div>
		</div>
	</div>
</div>
<div id="best-deal">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
				<h2>Fill Your Information Below</h2>
			</div>
			<div class="col-md-6 col-md-offset-3 fh5co-heading animate-box">
                <form method="post" action="#" id="form">
					{{csrf_field()}}
                    <div class="row form-group">
						<div class="col-md-6">
							<input type="hidden" name="booking_no" value="{{ rand() }}">
						</div>
					</div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="name">Name</label>
							<input type="text" id="name" class="form-control" name="name" placeholder="Your full name">
							@if ($errors->has('name'))
							<span class="invalid-feedback">
								<strong style="color:red;">{{ $errors->first('name') }}</strong>
							</span>
							@endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Email</label>
							<input type="text" id="email" class="form-control" name="email" placeholder="Your email address">
							@if ($errors->has('email'))
							<span class="invalid-feedback">
								<strong style="color:red;">{{ $errors->first('email') }}</strong>
							</span>
							@endif
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="subject">No Telepon</label>
							<input type="text" id="telp" name="telepon" class="form-control" placeholder="Your number telepon">
							@if ($errors->has('telepon'))
							<span class="invalid-feedback">
								<strong style="color:red;">{{ $errors->first('telepon') }}</strong>
							</span>
							@endif
                        </div>
					</div>
                    <div class="row form-group">
						<div class="col-md-12">
                            <label for="address">Address</label>
							<input type="text" id="address" class="form-control" name="address" placeholder="Your address">				@if ($errors->has('address'))
								<span class="invalid-feedback">
									<strong style="color:red;">{{ $errors->first('address') }}</strong>
								</span>
							@endif
						</div>
					</div>
                    <div class="row form-group">
						<div class="col-md-12 ">
							<label for="departure">Departure</label>
							<input type="date" id="departure" name="departure" class="form-control">
							@if ($errors->has('departure'))
								<span class="invalid-feedback">
									<strong style="color:red;">{{ $errors->first('departure') }}</strong>
								</span>
							@endif
						</div>
					</div>
                    <div class="row form-group">
						<div class="col-md-6 ">
							<label for="exampleFormControlSelect1" id="drop_text" >Package</label>
							<select class="form-control" id="package">
								<option selected>Choose...</option>
								@foreach ($paket as $dp)
								    <option value="{{$dp->id}}">{{$dp->nama_paket}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6 ">
							<label for="name">Person/Pax</label>
							<select class="custom-select form-control" id="pax" name="pax">
							</select>
						</div>
					</div>
                    <div class="row form-group">
						<div class="col-md-12">
						<label for="total">Total</label>
							<input type="hidden" id="total" value="" name="total" class="form-control" placeholder="Total payment">
							<input type="text" id="total-show" value="" name="total-show" class="form-control" placeholder="Total payment">
							@if ($errors->has('total'))
							<span class="invalid-feedback">
								<strong style="color:red;">{{ $errors->first('total') }}</strong>
							</span>
							@endif
						</div>
					</div>
                    <div class="row form-group">
						<div class="col-md-12">
							<label for="message">Message</label>
							<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say something about your booking"></textarea>
						</div>
					</div>
                    <div class="form-group">
						<button type="submit" value="submit" class="btn btn-primary">Book Now</button>
                    </div>

                </form>
			</div>

		</div>
	</div>
</div>

@include('customer/template/footer')
</div>
@endsection
