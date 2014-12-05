@extends('layout')
@section('content')
<div class="col-md-3">
@for($i=0;$i<=10;$i++)
<br>
@endfor
<a href="{{url('egresado/edit',$egresados->idusuario)}}">Datos personales</a><br><br>
<a href="{{url('empresa/edit',$egresados->idEmpLabora)}}">Datos laborales</a>
</div>
<form action="../update/{{$egresados->idusuario}}" method="get">
<div class="col-md-6">
    <div class="form-group">
        <label>Usuario:</label>
        <input type="text" class="form-control" name="usuario" value="{{$egresados->usuario}}">
    </div>
    <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" value="{{$egresados->contrasena}}">
    </div>
    <div class="form-group">
        <label>Dni:</label>
        <input type="text" class="form-control" name="dni" value="{{$egresados->dni}}">
    </div>
    <div class="form-group">
        <label>Apellido Paterno:</label>
        <input type="text" class="form-control" name="ap_paterno" value="{{$egresados->apaterno}}">
    </div>
    <div class="form-group">
        <label>Apellido Materno</label>
        <input type="text" class="form-control" name="ap_materno" value="{{$egresados->amaterno}}">
    </div>
    <div class="form-group">
        <label>Nombre:</label>
        <input type="text" class="form-control" name="nombre" value="{{$egresados->prinombre}}">
    </div>
    <div class="form-group">
        <label>Direccion:</label>
        <input type="text" class="form-control" name="direccion" value="{{$egresados->direccion01}}">
    </div>
    <div class="form-group">
        <label>Teléfono:</label>
        <input type="text" class="form-control" name="telefono" value="{{$egresados->telefono01}}">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control" name="email" value="{{$egresados->email}}">
    </div>
    <div class="form-group">
        <label>Código egresado:</label>
        <input type="text" class="form-control" name="codigo" value="{{$egresados->codigoExAlumno}}">
    </div>
    <button class="btn btn-primary">Modificar</button>
</div>
</form>
<div class="col-md-3">

</div>
@stop