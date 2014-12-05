<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@yield('cabecera')
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('egresado')}}">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="{{url('empresa')}}">Empresas</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mantenimiento egresados <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="{{url('egresado')}}">Estudios</a></li>
              <li><a href="#">Lugar de trabajo</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      <form action="{{url('egresado/search')}}" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="key">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#">{{Auth::User()->nombre}}</a></li>
         <li><a href="logout">Cerrar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php $status=Session::get('status'); ?>
    @if($status=='ok_create')
    <div class="alert alert-success fade in">
    	<button class="close" data-dismiss="alert" type="button">x</button>
    	<i class="fa fa-check-square"></i>Se creó el registro con éxito.
    </div>
    @elseif($status=='ok_update')
    <div class="alert alert-warning fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>Se modificó el registro con éxito.
    </div>
    @elseif($status=='ok_delete')
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>Se eliminó el registro con éxito.
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-xs-1 col-sm-4 col-md-3"></div>
            <div class="col-xs-10 col-sm-4 col-md-6">
                @yield('content')
            </div>
            <div class="col-xs-1 col-sm-4 col-md-3"></div>
        </div>
    </div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>