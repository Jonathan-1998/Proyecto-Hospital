<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = App\Medico::orderby('cedula_identidad','asc')->get();
        return view('medico.index', compact('medicos')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medico.insert');
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
            'cedula_identidad' => 'required',
            'nombre' => 'required',
            'especialdad' => 'required'
               
        ]);
          App\Medico::create($request->all());
 
          return redirect()->route('medico.index')
                        -> with('exito','se ha creado medico con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = App\Medico::findorfail($id);

        return view('medico.view', compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = App\Medico::findorfail($id);

        return view('medico.edit', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'cedula_identidad' => 'required',
            'nombre' => 'required',
            'especialdad' => 'required' 
        ]);
            
        $medico = App\Medico::findorfail($id);
        $medico->update($request->all());

        return redirect()->route('medico.index')
                     ->with('exito', 'medico modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = App\Medico::findorfail($id);

        $medico->delete();

        return redirect()->route('medico.index')
                     ->with('exito', 'medico eliminado correctamente');

    }
}
