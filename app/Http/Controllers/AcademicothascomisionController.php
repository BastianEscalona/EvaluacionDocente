<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academico;
use App\Comisions;
class AcademicothascomisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin','secre']);
        $comisions = Comisions::all();
        $comisions = Comisions::paginate(7);
        $academicos = Academico::all();
        return view('AsignarComision.index',compact('comisions','academicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comisions = Comisions::all();
        $academicos = Academico::all();
        return view('AsignarComision.crear',compact('comisions','academicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comisions = Comisions::all();
        $academicos = Academico::find($id);
        return view('AsignarComision.editar', compact('departamento', 'facultads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comisions = Comisions::find($id);
        $comisions->comision_id = request('comision_id');
        $comisions->save();
        return redirect('AsignarComision')->with('Mensaje','Comision Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comisions = Comisions::findOrfail($id);
        $comisions -> delete();

        return redirect('AsignarComision')->with('Mensaje','Comision Eliminado');
    }
}
