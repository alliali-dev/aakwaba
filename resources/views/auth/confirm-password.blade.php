@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="mb-4 text-sm text-gray-600">
            {{ 'This is a secure area of the application. Please confirm your password before continuing.' }}
        </div>
        <section style="width:380px; margin-top:20px; margin-bottom:20px; border-radius: 10px; padding:25px; border: green solid 2px;">
            <form method="POST" action="{{  route('password.confirm') }}">
                @csrf
                <fieldset>
                    <legend style="text-align: center; font-size:25px;"><b>Confirm your password</b></legend>
                    <!-- separation -->
                    <br><br>
                    <!-- Password -->
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="password">{{'Password'}}</label>

                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                        </div>

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->
                    </div><br><br>
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <button class="btn btn-primary">
                                {{ 'Confirm' }}
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