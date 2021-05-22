<?php

namespace App\Http\Controllers;

use App\Models\Instalacion;
use App\Models\Cliente;
use App\Models\Servicio;
use Illuminate\Http\Request;

class InstalacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instalaciones = Instalacion::all();
        return view('instalacion.index')->with('instalaciones',$instalaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $servicios = Servicio::all();

        return view('instalacion.create')->with('clientes',$clientes)->with('servicios',$servicios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instalacion = new Instalacion();

        $instalacion->cliente = $request->get('cliente');
        $instalacion->servicio = $request->get('servicio');
        $instalacion->dia = $request->get('dia');
        $instalacion->mes = $request->get('mes');
        $instalacion->anio = $request->get('anio');

        $instalacion->save();

        return redirect('/instalaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instalacion  $instalacion
     * @return \Illuminate\Http\Response
     */
    public function show(Instalacion $instalacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instalacion  $instalacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Servicio::all();
        $instalacion = Instalacion::find($id);
        return view('instalacion.edit')->with('instalacion',$instalacion)->with('servicios',$servicios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instalacion  $instalacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $instalacion = Instalacion::find($id);
        $instalacion->cliente = $request->get('cliente');
        $instalacion->servicio = $request->get('servicio');
        $instalacion->dia = $request->get('dia');
        $instalacion->mes = $request->get('mes');
        $instalacion->anio = $request->get('anio');

        $instalacion->save();

        return redirect('/instalaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instalacion  $instalacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instalacion $instalacion)
    {
        //
    }
}
