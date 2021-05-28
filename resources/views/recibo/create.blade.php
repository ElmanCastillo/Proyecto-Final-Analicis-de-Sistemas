@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear Instalaciones</h1>
@stop

@section('content')
    
<form action="/instalaciones" method="POST">
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
    <select name="servicio" id="servicio" class="form-control" tabindex="2">
      @foreach ($servicios as $servicio)
        <option value="{{ $servicio->id}}">{{$servicio->nombre_servicio}}</option>
       @endforeach
    </select> 
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Dia</label>
    <input id="dia" name="dia" type="text" step="any" value="" class="form-control" tabindex="3">
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Mes</label>
    <input id="mes" name="mes" type="text" step="any" value="" class="form-control" tabindex="4">
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Año</label>
    <input id="anio" name="anio" type="text" step="any" value="" class="form-control" tabindex="3">
  </div>
  <a href="/instalaciones" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop