@extends('layout')
@section('content')
<div class="col-md-3">

</div>
<form action="../update/{{$empresa->idEmpLabora}}" method="get">
<div class="col-md-6">
    <div class="form-group">
        <label>Nombre:</label>
        <input type="text" class="form-control" name="nombre" value="{{$empresa->nombreEmp}}">
    </div>
    <div class="form-group">
        <label>Direccion:</label>
        <input type="text" class="form-control" name="direccion" value="{{$empresa->direccionEmp}}">
    </div>
    <div class="form-group">
        <label>Teléfono:</label>
        <input type="text" class="form-control" name="telefono" value="{{$empresa->telefonoEmp}}">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control" name="email" value="{{$empresa->emailEmp}}">
    </div>
    <button class="btn btn-primary">Modificar</button>
</div>
</form>
<div class="col-md-3">

</div>
@stop