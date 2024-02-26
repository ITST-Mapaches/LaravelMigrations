<?php

namespace App\Http\Controllers;

use App\Models\proveedoresModel;
use Illuminate\Http\Request;

class proveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //obtiene todos los registros de la tabla proveedores a traves del modelo
        $proveedores = proveedoresModel::get();

        //retorna la vista index que se encuentra en la carpeta proveedores y le envía el arreglo con los registros de proveedores
        return view("proveedores.index", compact("proveedores"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
