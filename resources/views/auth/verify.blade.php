@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 2%">
                <div class="card" style="width: 40rem;">
                    <div class="card-body">
                        <h4 class="card-title">Verifique su dirección de correo electrónico</h4>
                        @if (session('resent'))
                            <p class="alert alert-success" role="alert">Se ha enviado un nuevo enlace de verificación a
                                Tu correo electrónico</p>
                        @endif
                        <p class="card-text"> Antes de continuar, compruebe si hay un enlace de verificación en su correo electrónico.
                            no recibi el email,</p>
                        <a href="{{ route('verification.resend') }}">haga clic aquí para solicitar otro</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection