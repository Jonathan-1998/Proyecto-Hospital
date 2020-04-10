<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = App\Sala::orderby('nombre','asc')->get();
        return view('sala.index', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sala.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar que lleguen todos los campos
        $request->validate([
            'nombre' => 'required',
            'cantidad_camas' => 'required'    
        ]);
          App\Sala::create($request->all());
 
          return redirect()->route('sala.index')
                        -> with('exito','se ha creado sala con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $sala = App\Sala::findorfail($id);

        return view('sala.view', compact('sala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sala = App\Sala::findorfail($id);

        return view('sala.edit', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'cantidad_camas' => 'required'    
        ]);
            
        $sala = App\Sala::findorfail($id);
        $sala->update($request->all());

        return redirect()->route('sala.index')
                     ->with('exito', 'sala modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sala = App\Sala::findorfail($id);

        $sala->delete();

        return redirect()->route('sala.index')
                     ->with('exito', 'sala eliminada correctamente');
    }
}
