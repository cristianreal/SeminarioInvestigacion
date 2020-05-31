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
            <label class="col-form-label" for="namebuyer">Nombre proveedor</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre" id="namebuyer" name="namebuyer">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="lastnamebuyer">Apellido proveedor</label>
            <input type="text" class="form-control" placeholder="Ingrese el apellido" id="lastnamebuyer" name="lastnamebuyer">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="dirbuyer">Direccion domiciliar</label>
            <input type="text" class="form-control" placeholder="Ingrese la direccion de su domicilio" id="dirbuyer" name="dirbuyer">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="telbuyer">Telefono</label>
            <input type="text" class="form-control" placeholder="Ingrese el numero de telefono" id="telbuyer" name="telbuyer">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="emailbuyer">Email</label>
            <input type="text" class="form-control" placeholder="Ingrese la direccion de correo electronico" id="emailbuyer" name="emailbuyer">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="genderbuyer">Genero</label>
            <select class="custom-select" id="genderbuyer" name="genderbuyer">
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
            <label class="col-form-label" for="city">Ciudad</label>
            <input type="text" class="form-control" placeholder="Ingrese la direccion de correo electronico" id="city" name="city">
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>    
@endsection
