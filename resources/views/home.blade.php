@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de confirmación') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Estás conectado!') }}
                    <p>
                    {{ __('¡Ahora puede modificar sus vuelos ingresando a Reservaciones!') }}

                    <div class="mt-3">
                        <a href="{{ url('/reservations') }}" class="btn btn-primary">
                            {{ __('Ir a Reservaciones') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
