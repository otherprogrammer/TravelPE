<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index()
    {
        return Destination::all();
    }

    public function show($id)
    {
        return Destination::find($id);
    }

    public function store(Request $request)
    {
        $destination = Destination::create($request->all());
        return response()->json($destination, 201);
    }

    public function update(Request $request, $id)
    {
        $destination = Destination::findOrFail($id);
        $destination->update($request->all());
        return response()->json($destination, 200);
    }

    public function destroy($id)
    {
        Destination::destroy($id);
        return response()->json(null, 204);
    }
}
