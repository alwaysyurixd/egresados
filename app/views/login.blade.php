<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-2 col-md-4">

        </div>
        <div class="col-xs-8 col-md-4">
           <form action="ingreso" method="POST">
           	@if(Session::has('login_errors'))
           	<span class="label label-danger">Usuario o contraseña incorrecta</span>
           	@endif
           	    <div align="center"><h2>LOGIN</h2></div>
           		<div class="form-group">
           		    <label for="usuario">Usuario:</label>
           		    <input type="text" name="usuario" class="form-control">
           		</div>
           		<div class="form-group">
                   	<label for="password">Contraseña:</label>
                   	<input type="password" name="password" class="form-control">
                   </div>
                   <button class="btn btn-primary btn-block">Ingresar</button>
           	</form>
        </div>
        <div class="col-xs-2 col-md-4">
        </div>
    </div>
</div>

</body>
</html>