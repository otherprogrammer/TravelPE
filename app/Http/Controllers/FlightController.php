<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    public function show($id)
    {
        return Flight::find($id);
    }

    public function create()
    {
        return view('flights.create'); // Crea la vista 'create' si aún no la tienes
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'Nombre del Vuelo' => 'required|string|max:255',
            'Origen' => 'required|string|max:255',
            'Destino' => 'required|string|max:255',
            'Hora_de_Salida' => 'required|date',
            'Hora_de_Llegada' => 'required|date',
        ]);

        // Crear un nuevo vuelo con los datos validados
        Flight::create($validatedData);

        // Redirigir a una página de éxito o mostrar un mensaje de éxito
        return redirect()->route('flights.index')->with('success', 'Vuelo creado exitosamente.');
    }

    public function update(Request $request, $id)
    {
        $flight = Flight::findOrFail($id);
        $flight->update($request->all());
        return response()->json($flight, 200);
    }

    public function destroy($id)
    {
        Flight::destroy($id);
        return response()->json(null, 204);
    }
}
