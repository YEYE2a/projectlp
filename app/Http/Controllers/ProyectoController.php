<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = DB::table('proyectos')->get();
        return view('projects.index', ['proyectos' => $proyectos]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Muestra un formulario para crear un proyecto
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Guarda el proyecto en la base de datos
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        // Muestra los detalles de un proyecto específico
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        // Muestra un formulario para editar un proyecto
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        // Actualiza el proyecto en la base de datos
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        // Elimina el proyecto
    }
}
