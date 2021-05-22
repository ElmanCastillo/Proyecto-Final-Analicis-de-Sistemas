<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Cliente;
use App\Models\LugarPoblado;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direccions = Direccion::all();
        return view('direccion.index')->with('direccions',$direccions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $lugarpoblados = LugarPoblado::all();

        return view('direccion.create')->with('clientes',$clientes)->with('lugarpoblados',$lugarpoblados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direccion = new Direccion();

        $direccion->cliente = $request->get('cliente');
        $direccion->lugar_poblado = $request->get('lugar_poblado');
        $direccion->nombre_lugar = $request->get('nombre_lugar');

        $direccion->save();

        return redirect('/direcciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lugarpoblados = LugarPoblado::all();
        $direccion = Direccion::find($id);
        return view('direccion.edit')->with('direccion',$direccion)->with('lugarpoblados',$lugarpoblados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $direccion = Direccion::find($id);

        $direccion->cliente = $request->get('cliente');
        $direccion->lugar_poblado = $request->get('lugar_poblado');
        $direccion->nombre_lugar = $request->get('nombre_lugar');

        $direccion->save();

        return redirect('/direcciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccion)
    {
        //
    }
}
