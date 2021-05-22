@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de Clientes</h1>
@stop

@section('content')
   <a href="clientes/create" class="btn btn-primary mb-3">AGREGAR</a>

<table id="clientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">NIT</th>
            <th scope="col">DPI</th>
            <th scope="col">Nacimiento</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id}}</td>
            <td>{{$cliente->nombres}}</td>
            <td>{{$cliente->apellidos}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->nit}}</td>
            <td>{{$cliente->dpi}}</td>
            <td>{{$cliente->nacimiento}}</td>
            <td>{{$cliente->estatus}}</td>
            <td>
                <form action="{{ route ('clientes.destroy',$cliente->id)}}" method="POST">
                <a href="/clientes/{{ $cliente->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#clientes').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop