@extends('layouts.base')

@section('content')
<div class="jumbotron">
    <form method="POST">
    @csrf
        <h1 align="center" class="display-3">Editar Proveedor</h1>
        <hr class="my-4">

        <div class="form-group">
            <label class="col-form-label" for="idbuyer">ID del proveedor</label>
            <input type="text" class="form-control" id="idbuyer" name="idbuyer" value="{{ $proveedor->pk_proveedor }}" readonly="">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="namebuyer">Nombre del proveedor</label>
            <input type="text" class="form-control" id="namebuyer" name="namebuyer" value="{{ $proveedor->nombre }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="lastnamebuyer">Apellido del proveedor</label>
            <input type="text" class="form-control" id="lastnamebuyer" name="lastnamebuyer" value="{{ $proveedor->apellido }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="dirbuyer">Direccion del proveedor</label>
            <input type="text" class="form-control" id="dirbuyer" name="dirbuyer" value="{{ $proveedor->direccion }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="telbuyer">Telefono del proveedor</label>
            <input type="text" class="form-control" id="telbuyer" name="telbuyer" value="{{ $proveedor->telefono }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="emailbuyer">Email del proveedor</label>
            <input type="text" class="form-control" id="emailbuyer" name="emailbuyer" value="{{ $proveedor->email }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="webpage">Pagina Web</label>
            <input type="text" class="form-control" id="webpage" name="webpage" value="{{ $proveedor->pagina_web }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="country">Pais del proveedor</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ $proveedor->pais }}">
        </div>

        <div class="form-group">
            <label class="col-form-label" for="city">Ciudad del proveedor</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $proveedor->ciudad }}">
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>    
@endsection