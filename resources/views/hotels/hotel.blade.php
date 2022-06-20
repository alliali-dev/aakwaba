@extends('layouts.main')
@section('content')
<div class="row justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
        <form class="form-floating" action="{{ route('save') }}" method="post" enctype="multipart/form-data">
            @csrf()

            <fieldset
                style="width: 100%; height:90%; margin-top:150px; margin-bottom:3px; border:  black; border-radius:33px;">
                <legend style="font-size:medium; font-style:italic; text-align:center;"><b><u>FORMULAIRE
                            D'ENREGISTREMENT
                            D'HOTEL</u> </b></legend><br><br>
                <div class="row">
                    <div class="col-5 offset-1">
                        <input class="form-control" type="text" name="NomHotel" id="NomHotel" required
                            placeholder="Nom de l’hôtel " value="{{ old('NomHotel') }}"><br>
                        <span class="text text-danger">@error('NomHotel'){{$message}}@enderror</span>
                    </div>
                    <div class="col-5  offset-right-1">
                        <input class="form-control" type="text" name="Adressehotel" id="Adressehotel"
                            placeholder="Adresse de l'hotel" value="{{ old('Adressehotel') }}">
                        <span class="text text-danger">@error('Adressehotel'){{$message}}@enderror</span>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-5 offset-1">
                        <input class="form-control" type="text" name="Telresevre" id="Telresevre" required
                            placeholder="Telephone de reservation " value="{{old('Telresevre')}}"><br>
                        <span class="text text-danger">@error('Telresevre'){{$message}}@enderror</span>
                    </div>
                    <div class="col-5 offset-right-1">
                        <input class="form-control" type="text" name="Telhotel" id="Telhotel"
                            placeholder="Telephone de l'hotel" value="{{old('Telhotel')}}">
                        <span class="text text-danger">@error('Telhotel'){{$message}}@enderror</span>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-5 offset-1">
                        <input class="form-control" type="email" name="email" id="email" required placeholder="E-mail"
                            value="{{old('email')}}"><br>
                        <span class="text text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="col-5  offset-right-1">
                        <textarea class="form-control" name="situation" id="situation" cols="80" rows="3"
                            maxlength="100" placeholder="Situation geographique"
                            value="{{old('situation')}}"></textarea><br>
                        <span class="text text-danger">@error('situation'){{$message}}@enderror</span>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-5 offset-1">
                        <input class="form-control" type="number" min="1" step="1" max="100" name="nombrechambre"
                            id="nombrechambre" required placeholder="Nombre de chambre"
                            value="{{old('nombrechambre')}}"><br>
                        <span class="text text-danger">@error('number'){{$message}}@enderror</span>
                    </div>
                    <div class="col-5  offset-right-1">
                        <input class="form-control" type="text" name="equipement" id="equipement"
                            placeholder="Equipement" value="{{old('equipement')}}">
                        <span class="text text-danger">@error('equipement'){{$message}}@enderror</span>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-5 offset-1">
                        <input class="form-control" type="text" name="typechambre" id="typechambre" required
                            placeholder="Type de Chambre" value="{{old('typechambre')}}"><br>
                        <span class="text text-danger">@error('typechambre'){{$message}}@enderror</span>
                    </div>
                    <div class="col-5 offset-right-1">
                        <input class="form-control" type="text" name="menuplat" id="menuplat"
                            placeholder="Menu de plat servi" value="{{old('menuplat')}}">
                        <span class="text text-danger">@error('menuplat'){{$message}}@enderror</span>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-3 offset-1">
                        <label for="horaireserviced">Ouverture</label>
                        <input class="form-control" type="time" name="horaireserviced" id="horaireserviced" required
                            placeholder="Overture" title="Heure d'Overture" value="{{old('horaireserviced')}}"><br>
                        <span class="text text-danger">@error('horaireserviced'){{$message}}@enderror</span>
                    </div>
                    <div class="col-3">
                        <label for="horaireservicef">Fermeture</label>
                        <input class="form-control" type="time" name="horaireservicef" id="horaireservicef" required
                            placeholder="Fermeture" title="Heure de Fermeture" value="{{old('horaireservicef')}}"><br>
                        <span class="text text-danger">@error('horaireservicef'){{$message}}@enderror</span>
                    </div>
                    <div class="col-4 offset-right-1">
                        <label for="autreservice">Autre service</label>
                        <input class="form-control" type="text" name="autreservice" id="autreservice"
                            placeholder="Autres services" value="{{old('autreservice')}}">

                        <span class="text text-danger">@error('autreservice'){{$message}}@enderror</span>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-3 offset-1">
                        <label for="Photohotel">Photo hotel</label>
                        <input class="form-control" type="file" name="Photohotel" id="Photohotel"
                            value="{{old('Photohotel')}}"><br>
                        <span class="text text-danger">@error('Photohotel'){{$message}}@enderror</span>
                    </div>
                    <div class="col-3">
                        <!-- <label for="Photochambre">Photo chambre</label>
                        <input class="form-control" type="file" name="Photochambre" id="Photochambre" accept="image/*"
                            value="{{old('Photochambre')}}"><br>
                        <span class="text text-danger">@error('Photochambre'){{$message}}@enderror</span> -->
                    </div>
                    <div class="col-4 offset-right-1">
                        <label for="Commentaire">Commentaire</label>
                        <input class="form-control" type="text" name="Commentaire" id="Commentaire"
                            value="{{old('Commentaire')}}">
                        <span class="text text-danger">@error('Commentaire'){{$message}}@enderror</span>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-10  offset-1 offset-right-1">
                        <!-- <input class="form-control" type="text" name="commentaire" id="commentaire" placeholder="Commentaire"> -->
                    </div>
                </div><br><br>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <input type="reset" class="btn btn-danger" value="Reprendre"><br>
                    </div><br>
                    <div class="col-3">
                        <input type="submit" class="btn btn-primary" value="Valider">
                    </div>
                    <div class="col-3"></div>
                </div>
                <br>
            </fieldset>
        </form>
    </div>
</div>
@endsection