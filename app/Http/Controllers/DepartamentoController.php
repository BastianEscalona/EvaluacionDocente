<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;
use App\Facultad;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();
        $facultads = Facultad::all();
        return view('Departamento.index', compact('departamentos', 'facultads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facultads = Facultad::all();
        return view('Departamento.crear', compact('facultads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamento = new Departamento;
        $departamento->nombre = request('nombre');
        $departamento->facultad_id = request('facultad_id');
        $departamento->save();
        return redirect('Departamento')->with('Mensaje','Departamento Agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facultads = Facultad::all();
        $departamento = Departamento::find($id);
        return view('Departamento.editar', compact('departamento', 'facultads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departamento = Departamento::find($id);
        $departamento->nombre = request('nombre');
        $departamento->facultad_id = request('facultad_id');
        $departamento->save();
        return redirect('Departamento')->with('Mensaje','Departamento Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $departamento = Departamento::findOrfail($id);
        $departamento -> delete();

        return redirect('Departamento')->with('Mensaje','Departamento Eliminado');
    }
}
