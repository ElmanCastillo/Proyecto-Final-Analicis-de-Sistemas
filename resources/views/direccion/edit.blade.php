@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Direccion</h1>
@stop

@section('content')
   <form action="/direcciones/{{$direccion->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Cliente</label>
    <label for="" class="form-label">{{$direccion->cliente}}</label>
    <input id="cliente" name="cliente" type="hidden" class="form-control" value="{{$direccion->cliente}}">    
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
    <input id="nombre_lugar" name="nombre_lugar" type="text" step="any" value="{{$direccion->nombre_lugar}}" class="form-control" tabindex="3">
  </div>
  <a href="/direcciones" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop