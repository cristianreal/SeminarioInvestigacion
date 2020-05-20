@extends('layouts.base')

@section('content')
<div class="jumbotron">
    <form method="POST">
    @csrf
        @if (session('success'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        <h1 align="center" class="display-3">Crear Marca</h1>
        <hr class="my-4">
        
        <div class="form-group">
            <label class="col-form-label" for="namebrand">Nombre de marca</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre de la marca" id="namebrand" name="namebrand">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="country">Pais de origen</label>
            <input type="text" class="form-control" placeholder="Ingrese el pais de origen" id="country" name="country">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="webpage">Pagina web</label>
            <input type="text" class="form-control" placeholder="Ingrese la pagina oficial de la marca" id="webpage" name="webpage">
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>    
@endsection
