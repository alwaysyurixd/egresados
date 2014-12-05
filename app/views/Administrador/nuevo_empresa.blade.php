@extends('layout')
@section('content')
<div class="col-md-3">

</div>
<form action="store" method="get">
<div class="col-md-6">
    <div class="form-group">
        <label>Nombre:</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group">
        <label>Direccion:</label>
        <input type="text" class="form-control" name="direccion">
    </div>
    <div class="form-group">
        <label>Teléfono:</label>
        <input type="text" class="form-control" name="telefono">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control" name="email">
    </div>
    <button class="btn btn-primary">Crear</button>
</div>
</form>
<div class="col-md-3">

</div>
@stop