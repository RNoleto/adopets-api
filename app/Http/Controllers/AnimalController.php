<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    // Retorna todos os animais
    public function index()
    {
        $animals = Animal::all();
        return response()->json($animals);
    }

    // Cria um novo animal
    public function store(Request $request)
    {
        $animal = Animal::create($request->all());
        return response()->json($animal, 201);
    }

    // Retorna um único animal
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return response()->json($animal);
    }

    // Atualiza um animal existente
    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());
        return response()->json($animal, 200);
    }

    // Remove um animal
    public function destroy($id)
    {
        Animal::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
