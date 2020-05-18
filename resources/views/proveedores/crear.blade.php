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
        <h1 align="center" class="display-3">Crear Proveedor</h1>
        <hr class="my-4">
        
        <div class="form-group">
            <label class="col-form-label" for="nameseller">Nombre proveedor</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre" id="nameseller" name="nameseller">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="lastnameseller">Apellido proveedor</label>
            <input type="text" class="form-control" placeholder="Ingrese el apellido" id="lastnameseller" name="lastnameseller">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="dirseller">Direccion domiciliar</label>
            <input type="text" class="form-control" placeholder="Ingrese la direccion de su domicilio" id="dirseller" name="dirseller">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="telseller">Telefono</label>
            <input type="text" class="form-control" placeholder="Ingrese el numero de telefono" id="telseller" name="telseller">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="emailseller">Email</label>
            <input type="text" class="form-control" placeholder="Ingrese la direccion de correo electronico" id="emailseller" name="emailseller">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="genderseller">Genero</label>
            <select class="custom-select" id="genderseller" name="genderseller">
                <option selected="">Seleccione el genero</option>
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
            </select>
        </div>

        <div class="form-group">
            <label class="col-form-label" for="webpage">Pagina web</label>
            <input type="text" class="form-control" placeholder="Ingrese la direccion de correo electronico" id="webpage" name="webpage">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="country">Pais</label>
            <input type="text" class="form-control" placeholder="Ingrese la direccion de correo electronico" id="country" name="country">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="ciudad">Ciudad</label>
            <input type="text" class="form-control" placeholder="Ingrese la direccion de correo electronico" id="ciudad" name="ciudad">
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>    
@endsection
