@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <section style="width:380px; margin-top:90px; margin-bottom:20px; border-radius: 10px; padding:25px; border: green solid 2px;">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <fieldset>
                    <legend style="text-align: center; font-size:25px;"><b>Réinitialisation</b></legend>

                    <br><br>
                    <div class="row">
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <!-- Email Address -->
                        <!-- <div class="col-md-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="email">{{'Email'}}</label>

                            <input id="email" class="form-control" type="email" name="email" value="{{old('email', $request->email)}}" required autofocus>
                        </div>

                        <!-- <div class="col-md-4"></div> -->
                    </div>
                    <!-- separation -->
                    <br><br>
                    <!-- Password -->
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="password">{{'Password'}}</label>

                            <input id="password" class="form-control" type="password" name="password" required autocomplete="false">
                        </div>

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->
                    </div><br><br>
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="password_confirmation">{{'Confirm Password'}}</label>

                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="false">
                        </div>

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->
                    </div>
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <button class="btn btn-primary">
                                {{ 'Réinitialiser' }}
                            </button>

                            <a class="btn btn-warning" href="{{ '/' }}">
                                {{ 'Retour' }}
                            </a>

                        </div>
                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->

                    </div>


                </fieldset>
            </form>
        </section>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
</div>
@stop