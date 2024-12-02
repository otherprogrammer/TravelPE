<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-black-900 dark:text-gray-100">
                        <h1 class="text-2xl font-bold mb-6">Crear Vuelo</h1>
                        @if ($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <strong class="font-bold">¡Ups!</strong>
                                <span class="block sm:inline">Hay algunos problemas con tus datos.</span>
                                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('flights.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="col-span-2">
                                    <label for="Nombre_del_Vuelo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre del Vuelo</label>
                                    <input type="text" name="Nombre_del_Vuelo" id="Nombre_del_Vuelo" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md" value="{{ old('Nombre_del_Vuelo') }}" placeholder="Ingrese el nombre del vuelo">
                                </div>
                                <div>
                                    <label for="Origen" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Origen</label>
                                    <input type="text" name="Origen" id="Origen" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('Origen') }}" placeholder="Ingrese el origen">
                                </div>
                                <div>
                                    <label for="Destino" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Destino</label>
                                    <input type="text" name="Destino" id="Destino" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('Destino') }}" placeholder="Ingrese el destino">
                                </div>
                                <div>
                                    <label for="Hora_de_Salida" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Hora de Salida</label>
                                    <input type="datetime-local" name="Hora_de_Salida" id="Hora_de_Salida" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('Hora_de_Salida') }}">
                                </div>
                                <div>
                                    <label for="Hora_de_Llegada" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Hora de Llegada</label>
                                    <input type="datetime-local" name="Hora_de_Llegada" id="Hora_de_Llegada" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('Hora_de_Llegada') }}">
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Crear Vuelo
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
