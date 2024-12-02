@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $flight->name }}</h1>
    <p>Salida: {{ $flight->departure }}</p>
    <p>Llegada: {{ $flight->arrival }}</p>
    <p>Precio: {{ $flight->price }}</p>
    <a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-primary">Editar Vuelo</a>
    <form action="{{ route('flights.destroy', $flight->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar Vuelo</button>
    </form>
</div>
@endsection
