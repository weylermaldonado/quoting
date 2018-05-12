<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yuma Textiles</title>
    {!! Html::style('assets/css/bootstrap.css') !!}
    <!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		.title-index {
			text-align: center;
		}
		.fondo{
			background-image: url(images/fondo.jpg);
		}
	</style>
</head>
<body class="fondo">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle Navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Yuma textiles</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="nav navbar-nav">
			    	<li><a href="{{URL::to('/')}}">Inicio</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				    @if (Auth::guest())
				        <li><a href="{{route('auth/login')}}">Inicio de sesión</a></li>
						<li><a href="{{route('auth/register')}}">Registrarse</a></li>
				    @else
		                <li>
		                    <a href="#">{{ Auth::user()->name }}</a>
		                </li>
		                <li><a href="{{route('auth/logout')}}">Salir</a></li>
		                
			        @endif
				</ul>
			</div>
		</div>
	</nav>

	
    <div class="container">
               @if (Session::has('errors'))
		    <div class="alert alert-warning" role="alert">
			<ul>
	            <strong>Oops! Something went wrong : </strong>
			    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	</div>
	<div class="title-index">
		<h1>Sistema de Cotización Yuma Textiles</h1>
	</div>
	
	<div class="container">
		<div class="row">
		  <div class="col">
			@if (Auth::guest())
				<a class="btn btn-primary btn-lg disabled" href="{{ route('procesos.index') }}" role="button" title="Inicia sesión para acceder a esta característica">Gestionar procesos</a>
				<a class="btn btn-primary btn-lg disabled" href="{{ route('empleados.index') }}" role="button" title="Inicia sesión para acceder a esta característica">Gestionar empleados</a>
				<a class="btn btn-primary btn-lg disabled" href="{{ route('realizan.index') }}" role="button" title="Inicia sesión para acceder a esta característica">Asignar procesos</a>
				<a class="btn btn-primary btn-lg disabled" href="{{ route('reportes.index') }}" role="button" title="Inicia sesión para acceder a esta característica">Ver reportes</a>
				<a class="btn btn-primary btn-lg disabled" href="{{ route('prestamos.index') }}" role="button" title="Inicia sesión para acceder a esta característica">Realizar prestamo</a>
				<a class="btn btn-primary btn-lg disabled" href="{{ route('nomina.index') }}" role="button" title="Inicia sesión para acceder a esta característica">Pagar a empleado</a>
			@else
				<a class="btn btn-primary btn-lg" href="{{ route('procesos.index') }}" role="button">Gestionar procesos</a>
				<a class="btn btn-primary btn-lg" href="{{ route('empleados.index') }}" role="button" >Gestionar empleados</a>
				<a class="btn btn-primary btn-lg" href="{{ route('realizan.index') }}" role="button" title="Inicia sesión para acceder a esta característica">Asignar procesos</a>
				<a class="btn btn-primary btn-lg" href="{{ route('reportes.index') }}" role="button" >Ver reportes</a>
				<a class="btn btn-primary btn-lg" href="{{ route('prestamos.index') }}" role="button" >Realizar prestamo</a>
				<a class="btn btn-primary btn-lg" href="{{ route('nomina.index') }}" role="button" >Pagar a empleado</a>
			@endif	
		</div>
		</div>
        
    <!-- Scripts -->
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	
</body>
</html>