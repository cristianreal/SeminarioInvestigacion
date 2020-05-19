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
                    <th scope="col">Pagina Web</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catalogoProveedores as $proveedor)
                <tr class="table-primary">
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->apellido }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->email }}</td>

                    <td>{{ $proveedor->pagina_web }}</td>
                    <td>{{ $proveedor->pais }}</td>
                    <td>{{ $proveedor->ciudad }}</td>

                    <td>
                        <a class="btn btn-info" href="/proveedor/editar/{{ $proveedor->pk_proveedor }}">Editar</a>
                        <a class="btn btn-warning" href="/proveedor/eliminar/{{ $proveedor->pk_proveedor }}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>    
@endsection