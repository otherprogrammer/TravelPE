@extends('layouts.template')
@section('content')

<div class="container my-5">
    <div class="row">
        @foreach ($reservations as $reservation)
        <!-- Card para cada reserva -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="assets/img/portfolio/cabin.png" alt="Imagen de reserva">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{ $reservation->codigo_vuelo }}</h5>
                    <p class="card-text">
                        <strong>Pasajero:</strong> {{ $reservation->nombre }} {{ $reservation->apellido }}<br>
                        <strong>DNI:</strong> {{ $reservation->dni }}<br>
                        <strong>Origen:</strong> {{ $reservation->origen }}<br>
                        <strong>Destino:</strong> {{ $reservation->destino }}<br>
                        <strong>Asiento:</strong> {{ $reservation->numero_asiento }}<br>
                        <strong>Fecha:</strong> {{ $reservation->fecha_vuelo }}<br>
                        <strong>Salida:</strong> {{ $reservation->hora_salida }}<br>
                        <strong>Llegada:</strong> {{ $reservation->hora_llegada }}<br>
                        <strong>Precio:</strong> S/ {{ $reservation->precio }}<br>
                        <strong>Estado:</strong> {{ ucfirst($reservation->estado) }}<br>
                        @if($reservation->email)
                        <strong>Email:</strong> {{ $reservation->email }}<br>
                        @endif
                        @if($reservation->telefono)
                        <strong>Teléfono:</strong> {{ $reservation->telefono }}<br>
                        @endif
                        @if($reservation->notas)
                        <strong>Notas:</strong> {{ $reservation->notas }}
                        @endif
                    </p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal{{ $reservation->id }}">
                        Ver más detalles
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal para detalles de la reserva -->
        <div class="modal fade" id="reservationModal{{ $reservation->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase">Detalles del vuelo: {{ $reservation->codigo_vuelo }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Pasajero:</strong> {{ $reservation->nombre }} {{ $reservation->apellido }}</p>
                        <p><strong>DNI:</strong> {{ $reservation->dni }}</p>
                        <p><strong>Origen:</strong> {{ $reservation->origen }}</p>
                        <p><strong>Destino:</strong> {{ $reservation->destino }}</p>
                        <p><strong>Asiento:</strong> {{ $reservation->numero_asiento }}</p>
                        <p><strong>Fecha del Vuelo:</strong> {{ $reservation->fecha_vuelo }}</p>
                        <p><strong>Hora de Salida:</strong> {{ $reservation->hora_salida }}</p>
                        <p><strong>Hora de Llegada:</strong> {{ $reservation->hora_llegada }}</p>
                        <p><strong>Precio:</strong> S/ {{ $reservation->precio }}</p>
                        <p><strong>Estado:</strong> {{ ucfirst($reservation->estado) }}</p>
                        @if($reservation->email)
                        <p><strong>Email:</strong> {{ $reservation->email }}</p>
                        @endif
                        @if($reservation->telefono)
                        <p><strong>Teléfono:</strong> {{ $reservation->telefono }}</p>
                        @endif
                        @if($reservation->notas)
                        <p><strong>Notas:</strong> {{ $reservation->notas }}</p>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
