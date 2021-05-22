<?php

namespace App\Http\Controllers;

use App\Models\LugarPoblado;
use Illuminate\Http\Request;

class LugarPobladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugarpoblados = LugarPoblado::all();
        return view('lugarpoblado.index')->with('lugarpoblados',$lugarpoblados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugarpoblado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lp = new LugarPoblado();
        $lp->nombre_lugar_poblado = $request->get('nombre_lugar_poblado');
        $lp->save();
        return redirect('/lugarespoblados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LugarPoblado  $lugarPoblado
     * @return \Illuminate\Http\Response
     */
    public function show(LugarPoblado $lugarPoblado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LugarPoblado  $lugarPoblado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lugarpoblado = LugarPoblado::find($id);
        return view('lugarpoblado.edit')->with('lugarpoblado',$lugarpoblado );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LugarPoblado  $lugarPoblado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lp = LugarPoblado::find($id);
        $lp->nombre_lugar_poblado = $request->get('nombre_lugar_poblado');
        $lp->save();
        return redirect('/lugarespoblados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LugarPoblado  $lugarPoblado
     * @return \Illuminate\Http\Response
     */
    public function destroy(LugarPoblado $lugarPoblado)
    {
        //
    }
}
