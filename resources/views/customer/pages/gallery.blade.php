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
                                <li class="active"><a href="{{route('gallery')}}">Gallery</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li class="cta"><a href="{{route('booking')}}">Booking</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

    <div class="fh5co-page-title" style="background-image: url('{{asset('/images/landscape/photo3.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box">
                    <h1>Gallery Tour</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="fh5co-contact animate-box">
        <div class="container">
            <div class="row text-center text-lg-left">

            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/album/photo1.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/album/photo1.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/album/photo3.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/album/photo4.jpg')}}" alt="">
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/album/photo5.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/album/photo6.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/album/photo7.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/album/photo8.jpg')}}" alt="">
                </a>
            </div>
            </div>
        </div>
    </div>

    <div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

    @include('customer/template/footer')
</div>
@endsection
