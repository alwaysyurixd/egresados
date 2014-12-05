@extends('layout')
@section('content')
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Eliminar</th>
        </thead>
        @foreach($empresas as $empresa)
            <tr>
                <td>{{$empresa->nombreEmp}}</td>
                <td>{{$empresa->direccionEmp}}</td>
                <td>{{$empresa->telefonoEmp}}</td>
                <td>{{$empresa->emailEmp}}</td>
                <td><a href="{{url('empresa/edit',$empresa->idEmpLabora)}}" class="btn btn-success">Editar</a></td>
                <td><a href="empresa/delete/{{$empresa->idusuario}}" class="btn btn-danger">Eliminar</a></td>
            </tr>
        @endforeach
    </table>
</div>
<a href="empresa/create" class="btn btn-block btn-primary">Nueva empresa</a>
@stop