@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear Direccion</h1>
@stop

@section('content')
    
<form action="/direcciones" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Cliente</label>
    <select name="cliente" id="cliente" class="form-control" tabindex="1">
      @foreach ($clientes as $cliente)
        <option value="{{ $cliente->id}}">{{$cliente->nombres}} {{$cliente->apellidos}}</option>
      @endforeach 
    </select>  
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Lugar Poblado</label>
    <select name="lugar_poblado" id="lugar_poblado" class="form-control" tabindex="2">
      @foreach ($lugarpoblados as $lugarpoblado)
        <option value="{{ $lugarpoblado->id}}">{{$lugarpoblado->nombre_lugar_poblado}}</option>
       @endforeach
    </select> 
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre del lugar</label>
    <input id="nombre_lugar" name="nombre_lugar" type="text" step="any" value="" class="form-control" tabindex="3">
  </div>
  <a href="/direcciones" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop