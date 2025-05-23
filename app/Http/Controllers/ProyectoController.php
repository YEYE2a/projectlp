<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Mostrar listado de proyectos
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = DB::table('proyectos')->get();
        return view('projects.index', ['proyectos' => $proyectos]);
        
    }

    public function create()
    {
        return view("projects/new");
    }


    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect()->route('proyectos.index')
           ->with("success", "Proyecto creado correctamente");
    }


    public function show(Proyecto $proyecto)
    {
   
    }


    public function edit(Proyecto $proyecto)
    {
        return view("projects.update", compact("proyecto"));
    }


    public function update(Request $request, Proyecto $proyecto)
    {
     
    }


    public function destroy(Proyecto $proyecto)
    {
    }
}
