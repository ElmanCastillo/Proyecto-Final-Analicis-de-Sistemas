@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Instalacion</h1>
@stop

@section('content')
   <form action="/instalaciones/{{$instalacion->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Cliente</label>
    <label for="" class="form-label">{{$instalacion->cliente}}</label>
    <input id="cliente" name="cliente" type="hidden" class="form-control" value="{{$instalacion->cliente}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Servicio</label>
    <select name="servicio" id="servicio" class="form-control" tabindex="2">
      @foreach ($servicios as $servicio)
        <option value="{{ $servicio->id}}">({{ $servicio->id}}) {{$servicio->nombre_servicio}}</option>
       @endforeach
    </select> 
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Dia</label>
    <input id="dia" name="dia" type="text" step="any" value="{{$instalacion->dia}}" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Mes</label>
    <input id="mes" name="mes" type="text" step="any" value="{{$instalacion->mes}}" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Año</label>
    <input id="anio" name="anio" type="text" step="any" value="{{$instalacion->anio}}" class="form-control" tabindex="5">
  </div>
  <a href="/instalaciones" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop