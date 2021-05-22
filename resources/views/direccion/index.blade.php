@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de Servicios</h1>
@stop

@section('content')
   <a href="direcciones/create" class="btn btn-primary mb-3">CREAR</a>

<table id="direcciones" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cliente</th>
            <th scope="col">Lugar Poblado</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($direccions as $direccion)
        <tr>
            <td>{{ $direccion->id}}</td>
            <td>{{$direccion->cliente}}</td>
            <td>{{$direccion->lugar_poblado}}</td>
            <td>{{$direccion->nombre_lugar}}</td>
            <td>
                <form action="{{ route ('direcciones.destroy',$direccion->id)}}" method="POST">
                <a href="/direcciones/{{ $direccion->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#direcciones').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop