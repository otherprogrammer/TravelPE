@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Vuelo</h1>
    <form action="{{ route('flights.update', $flight->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $flight->name }}" required>
        </div>
        <div class="form-group">
            <label for="departure">Salida:</label>
            <input type="datetime-local" class="form-control" id="departure" name="departure" value="{{ $flight->departure }}" required>
        </div>
        <div class="form-group">
            <label for="arrival">Llegada:</label>
            <input type="datetime-local" class="form-control" id="arrival" name="arrival" value="{{ $flight->arrival }}" required>
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $flight->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
