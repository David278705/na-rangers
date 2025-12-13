<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Ejemplo de endpoint GET
     */
    public function index()
    {
        return response()->json([
            'message' => 'Lista de items',
            'data' => [
                ['id' => 1, 'name' => 'Item 1'],
                ['id' => 2, 'name' => 'Item 2'],
                ['id' => 3, 'name' => 'Item 3'],
            ]
        ]);
    }

    /**
     * Ejemplo de endpoint POST
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return response()->json([
            'message' => 'Item creado exitosamente',
            'data' => $validated
        ], 201);
    }

    /**
     * Ejemplo de endpoint GET con parámetro
     */
    public function show($id)
    {
        return response()->json([
            'message' => 'Detalle del item',
            'data' => [
                'id' => $id,
                'name' => "Item {$id}",
                'description' => 'Descripción del item'
            ]
        ]);
    }

    /**
     * Ejemplo de endpoint PUT/PATCH
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
        ]);

        return response()->json([
            'message' => 'Item actualizado exitosamente',
            'data' => array_merge(['id' => $id], $validated)
        ]);
    }

    /**
     * Ejemplo de endpoint DELETE
     */
    public function destroy($id)
    {
        return response()->json([
            'message' => 'Item eliminado exitosamente',
            'id' => $id
        ]);
    }
}
