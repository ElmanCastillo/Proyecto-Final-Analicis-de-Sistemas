@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear Lugar Poblado</h1>
@stop

@section('content')
    
<form action="/lugarespoblados" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre_lugar_poblado" name="nombre_lugar_poblado" type="text" class="form-control" tabindex="1">    
  </div>

  <a href="/lugarespoblados" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop