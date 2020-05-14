@extends('layouts.base')

@section('content')
<div class="jumbotron">
    <form method="POST">
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
        <h1 align="center" class="display-3">Listar Marcas</h1>
        <hr class="my-4">

        <table class="table table-hover">
            <thead>
                <tr class="table-secondary">
                    <th scope="col">Nombre</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Web Page</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catalogoMarcas as $marca)
                <tr class="table-primary">
                    <td>{{ $marca->nombre }}</td>
                    <td>{{ $marca->pais }}</td>
                    <td>{{ $marca->pagina_web }}</td>
                    <td>
                        <a class="btn btn-info" href="/marca/editar/{{ $marca->pk_marca }}">Editar</a>
                        <a class="btn btn-warning" href="/marca/eliminar/{{ $marca->pk_marca }}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>    
@endsection
