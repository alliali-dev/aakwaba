@extends('layouts.main')
@section('content')
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="{{ asset('assets/img/rooms-bg.jpg') }}">
    <div class="hero-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Hotels</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Rooms Section Begin -->
<section class="room-section spad">
    <div class="container">
        <div class="banner_content text-center">
            <h6>Loin de la vie monotone</h6>
            <h2>Détends ton esprit</h2>
            <p>Si vous regardez des cassettes vierges sur le Web, vous pouvez être très confus au<br>différence de
                prix. Vous pouvez en voir pour aussi peu que 50 000 F CFA chacun.
            </p>
        </div>
    </div>
    <div class="hotel_booking_area position">
        <div class="container">
            <div class="hotel_booking_table">
                <div class="col-md-3">
                    <h2>Book<br> Your Room</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input type='date' class="form-control" placeholder="Date arrivée" />
                                            <!-- <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span> -->
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='date' class="form-control" placeholder="Date Départ" />
                                            <!-- <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="row">
                                        <select class="form-control form-select">
                                            <option data-display="Adult">Adult</option>
                                            <option value="1">Old</option>
                                            <option value="2">Younger</option>
                                            <option value="3">Potato</option>
                                        </select>
                                    </div><br><br>
                                    <div class="row">
                                        <select class="form-control form-select">
                                            <option data-display="Child">Child</option>
                                            <option value="1">Child</option>
                                            <option value="2">Baby</option>
                                            <option value="3">Child</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <!-- <select class="form-control form-select">
                                            <option data-display="Child">Number of Rooms</option>
                                            <option value="1">Room 01</option>
                                            <option value="2">Room 02</option>
                                            <option value="3">Room 03</option>
                                        </select> -->
                                    </div><br><br>
                                    <a class="btn btn-primary" href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->
@stop