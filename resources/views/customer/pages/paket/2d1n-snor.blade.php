@extends('customer.master')

@section('index')
    <div id="fh5co-page">
    @include('customer/template/header-package')
    <div class="fh5co-page-title" style="background-image: url('{{asset('images/landscape/photo9.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box">
                    <h1><span class="colored">2D1N</span> Tour</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="best-deal">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                    <h2>2D1N Package Snorkeling & Tour Nusa Penida</h2>
                </div>
                <div>
                    <div class="container">
                        <div class="row text-center text-lg-left">

                          <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                            <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/edit/photo7.jpg')}}" alt="">
                            </a>
                          </div>
                          <div class="col-lg-6 col-md-6 col-xs-6 img-padding-paket">
                            <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/edit/photo3.jpg')}}" alt="">
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
                                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/edit/photo6.jpg')}}" alt="">
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
                            <tr><td>Crystal Bay </td></tr>
                            <tr><td>Manta Point</td></tr>
                            <tr><td>Gamat Bay</td></tr>
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
                                    <tr><td>Hotel and Breakfast</td></tr>
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
                            <tr><td>1. <strong> 2pax </strong> -  IDR Rp.1.450.000,00/pax - 1 Room</td></tr>
                            <tr><td>2. <strong> 3pax </strong> -  IDR Rp.1.300.000,00/pax - 2 Rooms</td></tr>
                            <tr><td>3. <strong> 4pax </strong> -  IDR Rp.1.200.000,00/pax - 2 Rooms</td></tr>
                            <tr><td>4. <strong> 5pax </strong> -  IDR Rp.1.100.000,00/pax - 3 Rooms</td></tr>
                            <tr><td>5. <strong> 6pax </strong> -  IDR Rp.950.000,00/pax - 3 Rooms</td></tr>
                        </tbody>
                    </table>
                    <table class="table"> Click for detail activities
                        <button type="button" class="tittle-tour-m btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                         Itinerary
                        </button>
                    </table>
                </div>
                @include('customer/template/best-seller')
            </div>
        </div>
    </div>

    @include('customer/template/footer')
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLabel">Itinerary Of 2D1N Tour</h5>
            </div>
            <div class="modal-body">
				<div class="desc">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#day1">Day 1</a></li>
						<li><a data-toggle="tab" href="#day2">Day 2</a></li>
					</ul>
					<div class="desc">
                        <div class="tab-content">
                          <div id="day1" class="tab-pane fade in active">
                              <table class="table table-striped">
                                   <tr><td><strong>06.00</strong> : Hotel Pickup (if include pick & drop)</td></tr>
                                  <tr><td><strong>07.30</strong> : Arrived in Sanur Beach and Get ticket fastboat</td></tr>
                                  <tr><td><strong>08.00</strong> : Fastboat going to Nusa Penida</td></tr>
                                  <tr><td><strong>09.00</strong> : Arrived in Nusa Penida and Tour will starting </td></tr>
                                  <tr><td><strong>10.00</strong> : Visit Atuh Beach & Diamond Beach</td></tr>
                                  <tr><td><strong>12.30</strong> : Visit Tree House </td></tr>
                                  <tr><td><strong>13.30</strong> : Lunch Time at Restaurant</td></tr>
                                  <tr><td><strong>15.00</strong> : Visit Teletubis Hills</td></tr>
                                  <tr><td><strong>17.30</strong> : Check in Hotel take a rest overnight</td></tr>
                               </table>
                          </div>
                          <div id="day2" class="tab-pane fade">
                              <table class="table table-striped">
                                  <tr><td><strong>09.00</strong> : Starting tours day 2 pick up in hotel</td></tr>
                                  <tr><td><strong>10.00</strong> : Visit Broken Beach</td></tr>
                                  <tr><td><strong>11.30</strong> : Visit Angel Billabong</td></tr>
                                  <tr><td><strong>12.30</strong> : Lunch Time at Restaurant</td></tr>
                                  <tr><td><strong>14.00</strong> : Visit Kelingking Beach</td></tr>
                                  <tr><td><strong>15.00</strong> : Visit Crystal Bay</td></tr>
                                  <tr><td><strong>16.00</strong> : Back to Harbour Nusa Penida</td></tr>
                                  <tr><td><strong>17.00</strong> : Tour Ended, Fastboat back to Sanur Beach</td></tr>
                               </table>
                          </div>
                        </div>
                      </div>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
            </div>
        </div>
    </div>
@endsection
