@extends('layouts.main')
@section('content')
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="{{asset ('assets/img/services-bg.jpg') }}">
    <div class="hero-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services</h1>
                </div>
            </div>
            <div class="page-nav">
                <a href="#" class="left-nav"><i class="lnr lnr-arrow-left"></i> Hotel</a>
                <a href="#" class="right-nav">Chambres <i class="lnr lnr-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Services Section Begin -->
<div class="col-12">
    <div class="contact-form">
        <h5>Ajoutez le service</h5>
        <form action="{{ route('service.save') }}" method="POST" enctype="multipart/form-data">
            @csrf()
            <div class="row">
                <div class="col-lg-6">
                    <!-- <p>From</p> -->
                    <div class="form-group">
                        <input type="text" class="form-control form-input" name="libelle" value="{{ old('libelle') }}"
                            placeholder="libellé " required>
                        <!-- <img src="{{ asset('assets/img/edit.png') }}" alt=""> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class=" form-control form-input" name="description"
                            value="{{ old('description') }}" placeholder="Description">
                        <!-- <img src="{{ asset('assets/img/envelop-copy.png') }}" alt=""> -->
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input class=" form-control form-input" type="text" name="type" value="{{ old('type') }}"
                            placeholder="Type de service">
                        <!-- <img src="{{ asset('assets/img/phone-copy.png') }}" alt=""> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <!-- <p> Hotel</p> -->
                        <div class="form-select">
                            <select class=" form-control form-select" name="hotel" value="{{ old('hotel') }}">
                                <option selected>{{"Choisissez l'hotel"}}</option>
                                @foreach($hotel as $item)
                                <option value="{{ old('$item->id') }}">{{$item->nom}}</option>
                                @endforeach
                            </select>
                            <!-- <img src="{{ asset('assets/img/speech-copy.png') }}" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-2">
                    <input type="reset" class="btn btn-danger" value="Reprendre">
                </div>
                <div class="col-lg-2">
                    <input type="submit" class="btn btn-primary" value="Soumettre">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Services Section End -->
@stop