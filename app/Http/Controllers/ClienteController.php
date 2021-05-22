<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct(){
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();

        $clientes->nombres = $request->get('nombres');
        $clientes->apellidos = $request->get('apellidos');
        $clientes->telefono= $request->get('telefono');
        $clientes->nit = $request->get('nit');
        $clientes->dpi = $request->get('dpi');
        $clientes->nacimiento = $request->get('nacimiento');
        $clientes->estatus = $request->get('estatus');

        $clientes->save();

        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $cliente->nombres = $request->get('nombres');
        $cliente->apellidos = $request->get('apellidos');
        $cliente->telefono= $request->get('telefono');
        $cliente->nit = $request->get('nit');
        $cliente->dpi = $request->get('dpi');
        $cliente->nacimiento = $request->get('nacimiento');
        $cliente->estatus = $request->get('estatus');

        $cliente->save();

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$cliente = Articulo::find($id);
        //$cliente->delete();
        return redirect('clientes');
    }
}
