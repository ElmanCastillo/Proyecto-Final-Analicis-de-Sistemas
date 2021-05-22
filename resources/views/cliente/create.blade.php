@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Agregar Cliente</h1>
@stop

@section('content')
    
<form action="/clientes" method="POST">
  @csrf
 <div class="mb-3">
    <label for="" class="form-label">Nombres</label>
    <input id="nombres" name="nombres" type="text" class="form-control" value="">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellidos</label>
    <input id="apellidos" name="apellidos" type="text" class="form-control" value="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" value="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">NIT</label>
    <input id="nit" name="nit" type="number" step="any" class="form-control" value="">
  </div>
    <div class="mb-3">
    <label for="" class="form-label">DPI</label>
    <input id="dpi" name="dpi" type="number" step="any" class="form-control" value="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nacimiento</label>
    <input id="nacimiento" name="nacimiento" type="text" step="any" class="form-control" value="">
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Estatus</label>
    <input id="estatus" name="estatus" type="number" step="any" class="form-control" value="">
  </div>
  <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop