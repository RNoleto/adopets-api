<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Species;

class SpeciesController extends Controller
{
    public function index()
    {
        $species = Species::all();
        return response()->json($species);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $species = Species::create($request->all());
        return response()->json($species, 201);
    }

    public function show($id)
    {
        $species = Species::findOrFail($id);
        return response()->json($species);
    }

    public function update(Request $request, $id)
    {
        $species = Species::findOrFail($id);

        $request->validate([
            'nome' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $species->update($request->all());
        return response()->json($species, 200);
    }

    public function destroy($id)
    {
        $species = Species::findOrFail($id);
        $species->delete();
        return response()->json(null, 204);
    }
}
