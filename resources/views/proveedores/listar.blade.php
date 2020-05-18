@extends('layouts.base')

@section('content')
<div class="jumbotron">
    @if (session('success'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session('success') }}</strong>
        </div>
    @elseif (session('delete'))
    <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session('delete') }}</strong>
        </div>
    @endif
        <h1 align="center" class="display-3">Lista de Proveedores</h1>
        <hr class="my-4">

        <table class="table table-hover">
            <thead>
                <tr class="table-secondary">
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jornada</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catalogoVendedores as $vendedor)
                <tr class="table-primary">
                    <td>{{ $vendedor->nombre }}</td>
                    <td>{{ $vendedor->apellido }}</td>
                    <td>{{ $vendedor->direccion }}</td>
                    <td>{{ $vendedor->telefono }}</td>
                    <td>{{ $vendedor->email }}</td>
                    @if ($vendedor->jornada)
                        <td>Matutina</td>
                    @else
                        <td>Vespertina</td>
                    @endif
                    <td>
                        <a class="btn btn-info" href="/vendedor/editar/{{ $vendedor->pk_vendedor }}">Editar</a>
                        <a class="btn btn-warning" href="/vendedor/eliminar/{{ $vendedor->pk_vendedor }}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>    
@endsection