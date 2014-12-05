@extends('layout')
@section('content')
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
                <th>DNI</th>
                <th>Apellido Pat.</th>
                <th>Apellido Mat.</th>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Eliminar</th>
        </thead>
        @foreach($egresados as $egresado)
            <tr>
                <td>{{$egresado->dni}}</td>
                <td>{{$egresado->apaterno}}</td>
                <td>{{$egresado->amaterno}}</td>
                <td>{{$egresado->prinombre}}</td>
                <td><a href="{{url('egresado/edit',$egresado->idusuario)}}" class="btn btn-success">Editar</a></td>
                <td><a href="egresado/delete/{{$egresado->idusuario}}" class="btn btn-danger">Eliminar</a></td>
            </tr>
        @endforeach
    </table>
</div>
<a href="egresado/create" class="btn btn-block btn-primary">Nuevo usuario</a>
@stop