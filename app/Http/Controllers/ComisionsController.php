<?php

namespace App\Http\Controllers;

use App\Comisions;
use Illuminate\Http\Request;
class ComisionsController extends Controller
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
        return view('comisions.index', compact('comisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Comisions.crear');
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
        $datosComision=request()->except('_token');
        Comisions::insert($datosComision);
        return redirect('Comisions')->with('Mensaje','Comision Agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function show(Comisions $comisions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Comisions= Comisions::findOrFail($id);   //Devuelve toda la informacion del id
        return view('Comisions.editar',compact('Comisions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosComision=request()->except(['_token','_method']);

        Comisions::where('id','=',$id)->update($datosComision);
       
        $Comisions= Comisions::findOrFail($id);   //Devuelve toda la informacion del id

        return redirect('Comisions')->with('Mensaje','Comision Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comisions::destroy($id);
        return redirect('Comisions')->with('Mensaje','Comision Eliminada');
    }
}
