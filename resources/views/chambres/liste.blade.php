@extends('layouts.main')
@section('content')
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="{{ asset('assets/img/rooms-bg.jpg') }}">
    <div class="hero-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Chambres</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Rooms Section Begin -->
<section class="room-section spad">
    <div class="container">
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('assets/img/room/rooms-1.jpg') }}" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="{{ asset('assets/img/room/rooms-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Chambre Standard</h2>
                            <div class="room-price">
                                <span>&Agrave;</span>
                                <h2>4000 FCFA</h2>
                                <sub>/nuit</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Description de la chambre.</p>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <i class="flaticon-019-television"></i>
                                <span>Smart TV</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-029-wifi"></i>
                                <span>High Wi-fii</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <span>AC</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-036-parking"></i>
                                <span>Parking</span>
                            </div>
                            <div class="room-info last">
                                <i class="flaticon-007-swimming-pool"></i>
                                <span>Pool</span>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">R&eacute;server maintenant<i
                                class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('assets/img/room/rooms-3.jpg') }}" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="{{ asset('assets/img/room/rooms-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Chambre Double</h2>
                            <div class="room-price">
                                <span>&Agrave;</span>
                                <h2>80.000 FCFA</h2>
                                <sub>/nuit</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Description de la chambre.</p>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <i class="flaticon-019-television"></i>
                                <span>Smart TV</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-029-wifi"></i>
                                <span>High Wi-fii</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <span>AC</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-036-parking"></i>
                                <span>Parking</span>
                            </div>
                            <div class="room-info last">
                                <i class="flaticon-007-swimming-pool"></i>
                                <span>Pool</span>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">R&eacute;server maintenant<i
                                class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('assets/img/room/rooms-4.jpg') }}" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="{{ asset('assets/img/room/rooms-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Suite Junior </h2>
                            <div class="room-price">
                                <span>&Agrave;</span>
                                <h2>20.000 FCFA</h2>
                                <sub>/nuit</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Description.</p>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <i class="flaticon-019-television"></i>
                                <span>Smart TV</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-029-wifi"></i>
                                <span>High Wi-fii</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <span>AC</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-036-parking"></i>
                                <span>Parking</span>
                            </div>
                            <div class="room-info last">
                                <i class="flaticon-007-swimming-pool"></i>
                                <span>Pool</span>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">R&eacute;server maintenant<i
                                class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->
@stop