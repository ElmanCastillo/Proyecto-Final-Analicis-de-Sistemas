@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
   <form action="/servicios/{{$servicio->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre_servicio" name="nombre_servicio" type="text" class="form-control" value="{{$servicio->nombre_servicio}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion_servicio" name="descripcion_servicio" type="text" class="form-control" value="{{$servicio->descripcion_servicio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio_servicio" name="precio_servicio" type="number" step="any" class="form-control" value="{{$servicio->precio_servicio}}">
  </div>
  <a href="/servicios" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop