@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
   <form action="/lugarespoblados/{{$lugarpoblado->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre_lugar_poblado" name="nombre_lugar_poblado" type="text" class="form-control" value="{{$lugarpoblado->nombre_lugar_poblado}}">    
  </div>
  <a href="/lugarespoblados" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop