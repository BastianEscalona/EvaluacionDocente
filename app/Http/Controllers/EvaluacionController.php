<?php

namespace App\Http\Controllers;

use App\Evaluacion;
use Illuminate\Http\Request;
use App\Departamento;
use App\Academico;
use App\Facultad;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluaciones = Evaluacion::all();
        $evaluaciones = Evaluacion::paginate(5);
        $departamentos = Departamento::all();
        return view('Evaluacion.index', compact('evaluaciones', 'departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_Academico)
    {
        $academico = Academico::find($id_Academico);
        $departamentos = Departamento::all();
        $facultades = Facultad::all();
        return view('Evaluacion.crear', compact('departamentos', 'academico', 'facultades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evaluaciones = new Evaluacion;

        $evaluaciones->academico_id = request('academico_id');
        $evaluaciones->comision_id = 1;
        $evaluaciones->nombre = request('nombre');
        $evaluaciones->fechainicio= date('2020-05-20');
        $evaluaciones->fechafinal= date('2020-05-20');
        $evaluaciones->titulo = request('titulo');
        $evaluaciones->gradoAcademico = request('gradoAcademico');
        $evaluaciones->categoria = request('categoria');
        $evaluaciones->HorasContrato = request('HorasContrato');
        $evaluaciones->calificacionanterior = "-1";
        $evaluaciones->tipoplanta= request('tipoplanta');
        $evaluaciones->t1 = request('t1');
        $evaluaciones->t2 = request('t2');
        $evaluaciones->t3 = request('t3');
        $evaluaciones->t4 = request('t4');
        $evaluaciones->t5 = request('t5');
        $evaluaciones->nota1 = request('nota1');
        $evaluaciones->nota2 = request('nota2');
        $evaluaciones->nota3 = request('nota3');
        $evaluaciones->nota4 = request('nota4');
        $evaluaciones->nota5 = request('nota5');
        $evaluaciones->notafinal = request('notafinal');
        $evaluaciones->argumento = request('argumento');
        $evaluaciones->fechaevaluacion= date('2020-05-20');
        $evaluaciones->email = "oea@ma.cl";

        $evaluaciones->save();
        return redirect('Academico') -> with('Mensaje', 'Se realizo la evaluacion a '.request('nombre'));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluacion $evaluacion)
    {
        //
    }
}
