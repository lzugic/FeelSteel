@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">

                <h2>{{ __('Potvrdi E-mail Adresu') }}</h2>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Verifikacioni link je poslat na Vasu email adresu.') }}
                        </div>
                    @endif

                    {{ __('Pre nastavka, molim Vas poroverite Vasu email adresu zbog Verifikacionog linka.') }}
                    {{ __('Ako nije stigao email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kliknte ovde da posaljete jos jedan') }}</button>.
                    </form>
                </div>
    </div>
</div>
@endsection