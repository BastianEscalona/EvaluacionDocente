<?php

namespace App\Http\Controllers;

use App\Academico;
use Illuminate\Http\Request;
use App\Departamento;


class AcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin','secre']);
        $academicos = Academico::all();
        $academicos = Academico::paginate(7);
        $departamentos = Departamento::all();
        return view('Academico.index', compact('academicos', 'departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('Academico.crear', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $academicos = new Academico;
        $academicos->rut = request('rut');
        $academicos->nombre = request('nombre');
        $academicos->apellido = request('apellido');
        $academicos->email = request('email');
        $academicos->titulo = request('titulo');
        $academicos->gradoAcademico = request('gradoAcademico');
        $academicos->categoria = request('categoria');
        $academicos->HorasContrato = request('HorasContrato');
        $academicos->estado = request('estado');
        $academicos->departamento_id = request('departamento_id');

        $academicos->save();
        return redirect('Academico')->with('Mensaje','Academico Agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Academico  $academico
     * @return \Illuminate\Http\Response
     */
    public function show(Academico $academico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Academico  $academico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentos = Departamento::all();
        $academicos = Academico::find($id);
        return view('Academico.editar', compact('academicos', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Academico  $academico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $academicos = Academico::find($id);
        $academicos->rut = request('rut');
        $academicos->nombre = request('nombre');
        $academicos->apellido = request('apellido');
        $academicos->email = request('email');
        $academicos->titulo = request('titulo');
        $academicos->gradoAcademico = request('gradoAcademico');
        $academicos->categoria = request('categoria');
        $academicos->HorasContrato = request('HorasContrato');
        $academicos->departamento_id = request('departamento_id');
        $academicos->save();
        return redirect('Academico')->with('Mensaje','Academico Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Academico  $academico
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $academicos = Academico::findOrfail($id);
        $academicos -> delete();

        return redirect('Academico')->with('Mensaje','Academico Eliminado');
    }
}