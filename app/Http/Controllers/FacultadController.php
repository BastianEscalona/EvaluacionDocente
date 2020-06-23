<?php

namespace App\Http\Controllers;

use App\Facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);

        $datos['Facultad'] = Facultad::paginate(5);
        


        return view('Facultad.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Facultad.crear');
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

        //$datosFacultad=request()->all();
        $datosFacultad=request()->except('_token');

        Facultad::insert($datosFacultad);

        return redirect('Facultad')->with('Mensaje','Facultad Agregada con exito');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function show(Facultad $facultad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Facultad= Facultad::findOrFail($id);   //Devuelve toda la informacion del id

        return view('Facultad.editar',compact('Facultad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosFacultad=request()->except(['_token','_method']);

        Facultad::where('id','=',$id)->update($datosFacultad);
       
        $Facultad= Facultad::findOrFail($id);   //Devuelve toda la informacion del id

        return redirect('Facultad')->with('Mensaje','Facultad Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Facultad::destroy($id);
        return redirect('Facultad')->with('Mensaje','Facultad Eliminada');
    }
}
