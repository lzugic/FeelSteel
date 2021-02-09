@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
                
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <h2>{{ __('Prijavi se') }}</h2>
                <div class="form-group">
                    <label for="name">{{ __('Ime') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">{{ __('E-Mail Adresa') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" onblur="checkFormat(this)">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Sifra') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" onblur="pass(this)">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm">{{ __('Potvrdi Sifru') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                    <button type="submit" id="reg_submit" class="btn btn-default">{{ __('Prijavi se') }}</button>
            </form>
        </div>
    </div>
</div>
<script>
function checkFormat(a){
    var b=a.value
    if(b.indexOf('@')<1||b.indexOf('.')<1){
        alert('Nepravilan format email-a!');
        document.getElementById('reg_submit').disabled=true;
    }
    else{
        document.getElementById('reg_submit').disabled=false;
    }
}
function pass(a){
    var b=a.value;
    if(b.length<5){
        alert('Password mora sadrzati vise od 5 karaktera!');

    }
}
</script>
@endsection
