@extends('layouts1.main')
@section('content')

<!-- Validation Errors -->
<div style="width: 100%;" style=" margin-top: 25px; margin-left:0px;" class="offset-1">
    <form method="POST" action="{{ route('saveuser') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Name -->
            <div class="col-6">
                <label for="name">Nom</label>
                <input id="name" type="text" name="name" class="form-control" value="{{old('name')}}" required autofocus
                    placeholder="Nom" />
                <span class="text text-danger">@error('name'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
                <label for="lastname">Prenoms</label>
                <input id="lastname" type="text" name="lastname" class="form-control" value="{{old('lastname')}}"
                    placeholder="Prenoms" />
                <span class="text text-danger">@error('lastname'){{$message}}@enderror</span>
            </div>
        </div><br><br>
        <div class="row">
            <!-- Email Address -->
            <div class="col-6">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control" value="{{old('email')}}" required
                    placeholder="Email" />
                <span class="text text-danger">@error('email'){{$message}}@enderror</span>
            </div>
            <!-- status -->
            <div class="col-6">
                <label for="st">Choisissez le Droit</label>
                <select name="st" class="form-control" style="height: 1.4cm;" id="st" value="{{ old('st') }}">
                    <!-- <option desabled>Choisissez le droit</option> -->
                    <option desabled>------------------</option>
                    <option value="0">Commercial</option>
                    <option value="1">Admin</option>
                </select>
            </div>
        </div><br><br>
        <div class="row">
            <!-- Password -->
            <div class="col-6">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" min="12"
                    max="15" class="form-control" value="{{ old('password') }}" placeholder="password" />
                <span class="text text-danger">@error('password'){{$message}}@enderror</span>
            </div>

            <!-- Confirm Password -->
            <div class="col-6">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" min="12" max="15"
                    class="form-control" value="{{ old('password_confirmation') }}" required
                    placeholder="password confirmation" />
                <span class="text text-danger">@error('password_confirmation'){{$message}}@enderror</span>
            </div>
        </div><br><br>
        <div class="row">
            <!-- avatar -->
            <div class="col-12">
                <label for="photo">Photo de profile</label>
                <input id="photo" type="file" name="photo" accept="image/*" value="{{old('photo')}}"
                    class="form-control" />
                <span class="text text-danger">@error('photo'){{$message}}@enderror</span>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-4">
                <button type="reset" class="btn btn-danger">
                    {{ 'Effacer' }}
                </button>
            </div>
            <div class="col-8">
                <input type="submit" class="btn btn-primary" value=" {{ 'Enregistrer' }}">
            </div>
        </div>
    </form>
</div>
@stop