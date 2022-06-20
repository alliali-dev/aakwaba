@extends('layouts.main')
@section('content')
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="{{ asset('assets/img/contact-bg.jpg') }}">
    <div class="hero-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="page-nav">
                <a href="#" class="left-nav"><i class="lnr lnr-arrow-left"></i> Hotel</a>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-left">
                    <div class="contact-information">
                        <h2>Information de Contact </h2>
                        <ul>
                            <li><img src="{{ asset('assets/img/placeholder-copy.png') }}" alt=""> <span>Cocody, Abidjan,
                                    CI</span>
                            </li>
                            <li><img src="{{ asset('assets/img/phone-copy.png') }}" alt=""> <span>+225
                                    0707354592</span></li>
                            <li><img src="{{ asset('assets/img/envelop.png') }}" alt="">
                                <span>aakwaba@gmail.com</span>
                            </li>
                            <li><img src="{{ asset('assets/img/clock-copy.png') }}" alt=""> <span>Tous les jours: 06:00
                                    - 22:00</span></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <h2>Suivez-nous sur:</h2>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h5>&Eacute;crivez nous ...</h5>
                    <form action="{{ route('sendsms') }}" method="POST" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-lg-12">
                                <p>From</p>
                                <div class="input-group">
                                    <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom et Prénoms"
                                        required>
                                    <img src="{{ asset('assets/img/edit.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="email" name="adresseemail" value="{{ old('adresseemail') }}"
                                        placeholder="Email">
                                    <img src="{{ asset('assets/img/envelop-copy.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group phone-num">
                                    <input type="text" name="telephone" value="{{ old('telephone') }}"
                                        placeholder="Téléphone">
                                    <img src="{{ asset('assets/img/phone-copy.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="message">
                                    <p>Message</p>
                                    <div class="textarea">
                                        <textarea name="message" value="{{ old('message') }}"
                                            placeholder="Votre message ..."></textarea>
                                        <img src="{{ asset('assets/img/speech-copy.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit">Envoyer <i class="lnr lnr-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Section Begin -->
<div class="map">
    <!-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355676389!2d-118.69193052429003!3d34.02073049434915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1568665689853!5m2!1sen!2sbd"
        height="560" style="border:0;" allowfullscreen=""></iframe> -->
</div>
<!-- Map Section End -->

@endsection