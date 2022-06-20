@extends('layouts1.main')
@section('content')
<!--main content start-->
<!-- padding: top bottom right left -->
<section class="container-fluid" id="content">
    <!-- <section class="wrapper"> -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <!-- <div class="form-panel"> -->
            <!-- <div class="form"> -->
            <form class="form-group" id="signupForm" method="post" action="{{ route('saveroom') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                    <label for="NumeroChambre" class="control-label col-lg-2">
                        <h4>Num&eacute;ro de la Chambre</h4>
                    </label>
                    <div class="col-md-12 col-lg-10">
                        <input class=" form-control" id="NumeroChambre " name="NumeroChambre" type="number" min="1"
                            max="1000" placeholder="Cliquez pou choisir le numero">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="NumeroEtage" class="control-label col-lg-2">
                        <h4>Num&eacute;ro Etage</h4>
                    </label>
                    <div class="col-md-12 col-lg-10">
                        <input class=" form-control" id="NumeroEtage" name="NumeroEtage" type="text">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="telephonechambre" class="control-label col-lg-2">
                        <h4>t&eacute;l&eacute;phone de la chambre</h4> &nbsp;<i class="fa fa-phone"></i>
                    </label>
                    <div class="col-md-12 col-lg-10">
                        <input class="form-control " id="telephonechambre" name="telephonechambre" type="tel">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="equipement" class="control-label col-lg-2">
                        <h4>Equipements</h4>
                    </label>
                    <!-- <div class="col-md-12 col-lg-12"> -->

                    <div class="row">
                        <div class="col-12">
                            <input class="form-check-input" type="checkbox" name="Dmat" id="inlineCheckbox1"
                                value="Double matelat">
                            <label class="form-check-label" for="inlineCheckbox1">Double
                                matelat</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" name="M2PE" type="checkbox" id="inlineCheckbox2"
                                value="Matelat 2 places enfant">
                            <label class="form-check-label" for="inlineCheckbox2"><i class="fa fa-bed"></i> Matelat 2
                                places
                                enfant</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="checkbox" name="Clim" id="inlineCheckbox3"
                                value="Climatisation">
                            <label class="form-check-label" for="inlineCheckbox3">
                                Climatisation</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="checkbox" name="Vent" id="inlineCheckbox3"
                                value="Ventilation">
                            <label class="form-check-label" for="inlineCheckbox3"><i class="fa fa-ventilation"></i>
                                Ventilation</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="checkbox" name="Wifi" id="inlineCheckbox3"
                                value="Wifi">
                            <label class="form-check-label" for="inlineCheckbox3"><i class="fa fa-wifi"></i>
                                Wifi</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="checkbox" name="Tv" id="inlineCheckbox3" value="TV">
                            <label class="form-check-label" for="inlineCheckbox3"><i class="fa fa-tv"></i>
                                TV</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="photochambre" class="control-label col-lg-2">
                        <h4>Photo</h4>
                    </label>
                    <div class="col-md-12 col-lg-10">
                        <input class="form-control form-file" id="photochambre" name="photochambre" type="file"
                            accept="image/.*">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="prixchambre" class="control-label col-lg-2">
                        <h6>Prix &nbsp;<i class="fa fa-money"></i></h6>
                    </label>

                    <div class="col-md-12 col-lg-10">
                        <input class="form-control form-number" id="prixchambre" name="prixchambre" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="statutchambre" class="control-label col-lg-2 col-sm-3">
                        <h4>Statut</h4>
                    </label>
                    <div class="col-md-12 col-md-12 col-lg-10 col-sm-9">
                        <input type="radio" id="statutchambre" name="statutchambre"
                            value="oqp">&nbsp;&nbsp;Occup&eacute;e &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="statutchambre" name="statutchambre" value="dispo">&nbsp;&nbsp;Disponible
                    </div>
                </div>
                <div class="form-group">
                    <label for="categorie" class="control-label col-lg-2 col-sm-3">
                        <h4>Cat&eacute;gorie</h4>
                    </label>
                    <div class="col-md-12 col-md-12 col-lg-10 col-sm-9">
                        <select class="form-control form-selcet" id="categorie" name="categorie"
                            value="{{old('categorie')}}">
                            <option>Choisissez la Cat&eacute;gorie</option>
                            @foreach($Categories as $categorie)
                            <option value="{{$categorie->libellecategorie}}">{{$categorie->libellecategorie}}</option>
                            @endforeach
                        </select>
                    </div><br><br>
                    <label for="hotel" class="control-label col-lg-2 col-sm-3">
                        <h4>Hotel</h4>
                    </label>
                    <div class="col-md-12 col-md-12 col-lg-10 col-sm-9">
                        <select class="form-control" id="hotel" name="hotel" value="{{old('hotel')}}">
                            <option>Choisissez l'hotel</option>
                            @foreach($Hotels as $hotel)
                            <option value="{{$hotel->nom}}">{{$hotel->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                </div><br>
                <!-- <div class="form-group"> -->
                <div class="row">
                    <div class="col-sm-0 col-md-2 col-lg-3 col-xl-3"></div>
                    <div class="col-sm-0 col-md-8 col-lg-6 col-xl-6">
                        <button class="btn btn-danger" type="reset">Reprendre</button>
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
                    <div class="col-sm-0 col-md-2 col-lg-3 col-xl-3"></div>
                </div>
                <!-- </div> -->
            </form><br>
            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
    <!-- </section> -->
</section>
@endsection
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script> -->
<!-- Initialize the plugin: -->
<script type="text/javascript">
$(document).ready(function() {
    $('#equipement').multiselect({
        includeSelectAllOption: true,
        selectAllValue: 'select-all-value'
    });
});
</script>