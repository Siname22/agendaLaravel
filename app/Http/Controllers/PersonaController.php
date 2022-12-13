<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
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
        $personas = Persona::orderBy('nombre')->get();
        $categorias = Categoria::orderBy('nombre')->get();
        return view('paginas/personas/index',compact('personas','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nombre')->get();
        return view('paginas/personas/create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'estrella' => 'required',
            'categoria_id' => 'required',
            ]);

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
        $categorias = Categoria::orderBy('nombre')->get();
        return view('paginas/personas/show',compact('persona', 'categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        $categorias = Categoria::orderBy('nombre')->get();
        return view('paginas/personas/edit', compact('persona', 'categorias'));
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
        $this->validate($request,
            ['nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'estrella' => 'required',
            'categoria_id' => 'required',
            ]);
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
    public function  update_star(){
        
    }
}
