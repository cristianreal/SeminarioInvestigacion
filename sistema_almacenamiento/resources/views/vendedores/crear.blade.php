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
        <h1 align="center" class="display-3">Crear Vendedor</h1>
        <hr class="my-4">
        
        <div class="form-group">
            <label class="col-form-label" for="nameseller">Nombre vendedor</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre" id="nameseller" name="nameseller">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="lastnameseller">Apellido vendedor</label>
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
            <label class="col-form-label" for="borndateseller">Fecha nacimiento</label>
            <input type="date" class="form-control" id="borndateseller" name="borndateseller">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="initdateseller">Fecha vinculacion</label>
            <input type="date" class="form-control" id="" name="initdateseller"  value="<?php echo date('Y-m-d'); ?>" readonly="">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="journalseller">Jornada</label>
            <select class="custom-select" id="journalseller" name="journalseller">
                <option selected="">Seleccione la jornada</option>
                <option value="1">Matutina</option>
                <option value="2">Vespertina</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>    
@endsection
