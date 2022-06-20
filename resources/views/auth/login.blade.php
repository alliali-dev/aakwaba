@extends('layouts.main')
@section('content')
<div class="row justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card" style="margin-top: 4cm; margin-bottom:4cm;">
            <div class="card-header">{{ __('CONNEXION') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('sendlogin') }}" enctype="multipart/form-data" target="_parent">
                    @csrf()
                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('Adresse E-Mail') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password"
                            class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    {{ __('Restez en ligne') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                            <button type="submit"
                                class="form-control btn btn-primary col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                {{ __('Se connecter') }}
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link text-danger" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié?') }}
                            </a>
                            @endif
                        </div>
                        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1 col-xl-1"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection