@extends('layouts.main')
@section('content')
<section class="container-fluid" style="margin-top: 5cm; margin-bottom:5cm;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Entrer votre email pour recevoir le lien</b></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.email') }}" onsubmit="info()"
                            enctype="multipart/form-data" target="_parent">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Adresse E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary">
                                    {{ __('Recevoir le lien') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script type="text/javascript">
function info() {
    alert('Nous avons envoyé le lien sur votre adresse email. Veuillez le consulter pour continuer!');
}
</script>