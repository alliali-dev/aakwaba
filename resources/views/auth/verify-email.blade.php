@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="mb-4 text-sm text-gray-600">
            {{'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.' }}
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ 'A new verification link has been sent to the email address you provided during registration.' }}
        </div>
        @endif
        <section style="width:380px; margin-top:20px; margin-bottom:20px; border-radius: 10px; padding:25px; border: green solid 2px;">
            <form method="POST" action="{{  route('verification.send') }}">
                @csrf
                <fieldset>
                    <legend style="text-align: center; font-size:25px;"><b>Entrer votre email pour recevoir le lien</b></legend>

                    <br><br>
                    <div class="row">

                        <!-- Email Address -->
                        <!-- <div class="col-md-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="email">{{'Email'}}</label>

                            <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" required autofocus>
                        </div>

                        <!-- <div class="col-md-4"></div> -->
                    </div>
                    <!-- separation -->
                    <br><br>
                    <div class="row">

                        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <button class="btn btn-primary">
                                {{ 'Resend Verification Email' }}
                            </button>

                            <a class="btn btn-warning" href="{{ '/' }}">
                                {{ 'Retour' }}
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                    {{ 'Log Out'}}
                                </button>
                            </form>
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