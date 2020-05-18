@extends('layouts.base')

@section('content')
<div class="jumbotron">
    <form method="POST">
    @csrf
        <h1 align="center" class="display-3">Editar Proveedor</h1>
        <hr class="my-4">

        <div class="form-group">
            <label class="col-form-label" for="idseller">ID del vendedor</label>
            <input type="text" class="form-control" id="idseller" name="idseller" value="{{ $vendedor->pk_vendedor }}" readonly="">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="nameseller">Nombre del vendedor</label>
            <input type="text" class="form-control" id="nameseller" name="nameseller" value="{{ $vendedor->nombre }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="lastnameseller">Apellido del vendedor</label>
            <input type="text" class="form-control" id="lastnameseller" name="lastnameseller" value="{{ $vendedor->apellido }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="dirseller">Direccion del vendedor</label>
            <input type="text" class="form-control" id="dirseller" name="dirseller" value="{{ $vendedor->direccion }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="telseller">Telefono del vendedor</label>
            <input type="text" class="form-control" id="telseller" name="telseller" value="{{ $vendedor->telefono }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="emailseller">Email del vendedor</label>
            <input type="text" class="form-control" id="emailseller" name="emailseller" value="{{ $vendedor->email }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="journalseller">Jornada del vendedor</label>
            <select class="custom-select" id="journalseller" name="journalseller">
                @if($vendedor->jornada)
                    <option value="1" selected="">Matutina</option>
                @else
                    <option value="2" selected="">Vespertina</option>
                @endif
                <option value="1">Matutina</option>
                <option value="2">Vespertina</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>    
@endsection