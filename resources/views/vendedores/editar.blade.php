@extends('layouts.base')

@section('content')
<div class="jumbotron">
    <form method="POST">
    @csrf
        @if (session('alert'))
            <div class="alert alert-dismissible alert-secondary">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session('alert') }}</strong>
            </div>
            <script>
                $('div.alert').delay(3000).slideUp(300);
            </script>
        @endif
        <h1 align="center" class="display-3">Editar Marca</h1>
        <hr class="my-4">

        <div class="form-group">
            <label class="col-form-label" for="idbrand">ID de marca</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre de la marca" id="idbrand" name="idbrand" value="{{ $marca->pk_marca }}" readonly="">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="namebrand">Nombre de marca</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre de la marca" id="namebrand" name="namebrand" value="{{ $marca->nombre }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="country">Pais de origen</label>
            <input type="text" class="form-control" placeholder="Ingrese el pais de origen" id="country" name="country" value="{{ $marca->pais }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="webpage">Pagina web</label>
            <input type="text" class="form-control" placeholder="Ingrese la pagina oficial de la marca" id="webpage" name="webpage" value="{{ $marca->pagina_web }}">
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>    
@endsection
