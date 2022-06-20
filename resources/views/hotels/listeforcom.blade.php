@extends('layouts1.main')
@section('content')
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Tous les Hotels en ligne</h2>
        </div>
        <div class="row mb_30">
            <div class="col-lg-3 col-sm-6">
                <!-- <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{asset ('public/assets/image/room1.jpg') }}" alt="">
                        <a href="#" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Double Deluxe Room</h4>
                    </a>
                    <h5>$250<small>/night</small></h5>
                </div> -->
           
            </div>
             @forelse ( $Hotels as $detail )
                 
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{asset ('public/fichiers/imagehotel/'.$detail->photo) }}" style="height:8cm; width:8cm;"  alt="hotel">
                        <a href="#" class="btn theme_btn button_hover">{{ $detail->nom }}</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">{{'TEL: '.$detail->telhotel }}</h4>
                    </a>
                   
                    <div class="hotel_img">
                        <img src="{{asset ('public/fichiers/imagechambre/'.$detail->photochambre) }}" style="height:8cm; width:8cm;"  alt="Chambre">
                        <a href="#" class="btn theme_btn button_hover">{{ "Chambre" }}
                        <br>
                            <h6>20.000 F/nuit</h6>
                        </a>
                    </div>
                </div>
            </div>
           @empty
                Aucun hotel disponible!
             @endforelse
        </div>
                            <!-- pagination -->
                    <nav class="navbar-link" style="width: 45px ; height: 45px;">

                        {{ $Hotels->links('pagination::bootstrap-4') }}
                    </nav>
                    <!-- end pagination -->
    </div>
</section>
@stop