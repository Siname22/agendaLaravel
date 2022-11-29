<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Personas::orderBy('nombre')->get();
        return view('paginas/personas/index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paginas/personas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre' => 'required',]);

        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->estrella = $request->estrella;
        $persona->categoria_id = $request->categoria_id;
        $persona->save();

        return redirect()->route('personas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return view('paginas/personas/show',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return view('paginas/personas/edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $this->validate($request, ['nombre' => 'required',]);

        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->estrella = $request->estrella;
        $persona->categoria_id = $request->categoria_id;
        $persona->save();

        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }
}
