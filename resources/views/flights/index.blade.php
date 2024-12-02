@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Vuelos Disponibles</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($flights as $flight)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $flight->name }}</h2>
                    <p class="text-gray-600">{{ $flight->description }}</p>
                    <a href="{{ route('flights.show', $flight->id) }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Ver Detalles</a>
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{ route('flights.create') }}" class="mt-6 inline-block bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Crear Vuelo</a>
</div>
@endsection
