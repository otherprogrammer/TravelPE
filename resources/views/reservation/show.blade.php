@extends('layouts.app')

@section('template_title')
    {{ $reservation->name ?? __('Show') . " " . __('Reservation') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reservation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reservations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $reservation->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido:</strong>
                                    {{ $reservation->apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dni:</strong>
                                    {{ $reservation->dni }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo Vuelo:</strong>
                                    {{ $reservation->codigo_vuelo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Origen:</strong>
                                    {{ $reservation->origen }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Destino:</strong>
                                    {{ $reservation->destino }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numero Asiento:</strong>
                                    {{ $reservation->numero_asiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Vuelo:</strong>
                                    {{ $reservation->fecha_vuelo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora Salida:</strong>
                                    {{ $reservation->hora_salida }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora Llegada:</strong>
                                    {{ $reservation->hora_llegada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $reservation->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $reservation->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $reservation->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $reservation->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Notas:</strong>
                                    {{ $reservation->notas }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $reservation->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
