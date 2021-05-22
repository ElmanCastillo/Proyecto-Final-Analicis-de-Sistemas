@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de Instalaciones</h1>
@stop

@section('content')
   <a href="instalaciones/create" class="btn btn-primary mb-3">CREAR</a>

<table id="instalaciones" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cliente</th>
            <th scope="col">Servicio</th>
            <th scope="col">Dia</th>
            <th scope="col">Mes</th>
            <th scope="col">Año</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($instalaciones as $instalacion)
        <tr>
            <td>{{ $instalacion->id}}</td>
            <td>{{$instalacion->cliente}}</td>
            <td>{{$instalacion->servicio}}</td>
            <td>{{$instalacion->dia}}</td>
            <td>{{$instalacion->mes}}</td>
            <td>{{$instalacion->anio}}</td>
            <td>
                <form action="{{ route ('instalaciones.destroy',$instalacion->id)}}" method="POST">
                <a href="/instalaciones/{{ $instalacion->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#instalaciones').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop