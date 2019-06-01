@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verique seu endereço de e-maial') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link foi enviado ao seu endereço de e-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, por favor confira seu  email para verificação do link.') }}
                    {{ __('Caso não tenha recebido o e-mail') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
