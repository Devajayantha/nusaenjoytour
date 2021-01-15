@extends('customer.master')

@section('index')
    <div id="fh5co-page">
    @include('customer/template/header-package')
    <div class="fh5co-page-title" style="background-image: url('{{asset('images/landscape/photo9.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box">
                    <h1><span class="colored">3D2N</span> Tour</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="best-deal">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                    <h2>3D2N Package Tour Nusa Penida</h2>
                </div>
                <div>
                    <div class="container">
                        <div class="row text-center text-lg-left">
                            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                              <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/edit/photo6.jpg')}}" alt="">
                              </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                              <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/edit/photo9.jpg')}}" alt="">
                              </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                              <a href="#" class="d-block mb-4 h-100">
                                  <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/edit/photo8.jpg')}}" alt="">
                              </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                              <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/edit/photo4.jpg')}}" alt="">
                              </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                              <a href="#" class="d-block mb-4 h-100">
                                  <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/edit/photo2.jpg')}}" alt="">
                              </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                              <a href="#" class="d-block mb-4 h-100">
                                  <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/edit/photo1.jpg')}}" alt="">
                              </a>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr><th class="tittle-tour-md">Tour Day 1 : </th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Atuh Beach</td></tr>
                            <tr><td>Diamond Beach</td></tr>
                            <tr><td>Tree House Molentang & Pulau Seribu</td></tr>
                            <tr><td>Teletubies Hill</td></tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr><th class="tittle-tour-md">Tour Day 2 : </th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Kelingking Beach</td></tr>
                            <tr><td>Broken Beach</td></tr>
                            <tr><td>Angel Billabong</td></tr>
                            <tr><td>Crystal Bay (Sunset)</td></tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr><th class="tittle-tour-md">Tour Day 3 : </th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Crystal Bay</td></tr>
                            <tr><td>Manta Point</td></tr>
                            <tr><td>Gamat Point</td></tr>
                            <tr><td>Wall Point </td></tr>
                        </tbody>
                    </table>
                    <div class="desc">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Included</a></li>
                            <li><a data-toggle="tab" href="#menu1">Excluded</a></li>
                          </ul>
                        <div class="desc">
                          <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <table class="table table-striped">
                                    <tr><td>Ticket FastBoat Return [Sanur Bali - Nusa Penida]</td></tr>
                                    <tr><td>Mineral Water</td></tr>
                                    <tr><td>Lunch 1x</td></tr>
                                    <tr><td>Car  Full AC + petrol </td></tr>
                                    <tr><td>Our Driver/Guide</td></tr>
                                    <tr><td>Entrance Ticket + Parkir </td></tr>
                                    <tr><td>Private Tour (07.00-18.00)</td></tr>
                                    <tr><td>Hotel (Breakfast, Pool)</td></tr>
                                    <tr><td>Snorkeling Equitment</td></tr>
                                    <tr><td>Private Boat for Snorkeling</td></tr>
                                 </table>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <table class="table table-striped">
                                    <tr><td>Pick / Drop from your Hotel/Airport</td></tr>
                                    <tr><td class="icon"><i class="icon-location-2"></i> Nusa Dua, Uluwatu : Return Rp . 400.000,00/car</td></tr>
                                    <tr><td class="icon"><i class="icon-location-2"></i> Kuta, Legian, Seminyak : Return Rp . 350.000,00/car</td></tr>
                                    <tr><td class="icon"><i class="icon-location-2"></i> Canggu, Brawa, Batu Bolong : Return Rp . 400.000,00/car</td></tr>
                                 </table>
                            </div>
                          </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr><th class="tittle-tour-md">Price List : </th></tr>
                        </thead>
                        <tbody>
                            <tr><td>1. <strong> 2pax </strong> -  IDR Rp.1.900.000,00/pax - 1 Room</td></tr>
                            <tr><td>2. <strong> 3pax </strong> -  IDR Rp.1.750.000,00/pax - 2 Rooms</td></tr>
                            <tr><td>3. <strong> 4pax </strong> -  IDR Rp.1.650.000,00/pax - 2 Rooms</td></tr>
                            <tr><td>4. <strong> 5pax </strong> -  IDR Rp.1.550.000,00/pax - 3 Rooms</td></tr>
                            <tr><td>5. <strong> 6pax </strong> -  IDR Rp.1.450.000,00/pax - 3 Rooms</td></tr>
                        </tbody>
                    </table>
                </div>
                @include('customer/template/best-seller')
            </div>
        </div>
    </div>

    @include('customer/template/footer')
    </div>
@endsection
