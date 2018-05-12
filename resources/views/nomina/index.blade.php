@extends('app')
		    			    
@section('content')
    


<span> <center> <h1 id="titulo" class="titulo">Introduce la clave de usuario</h1><center></span>

{!! Form::open([ 'route' => 'nomina.show', 'method' => 'GET']) !!}
    <div class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
    <input type="text" id="search" name="search" class="form-control"  placeholder="Clave de empleado" required="true">
    
    </div> 
    <button type="submit" class="btn btn-success btn-block">Calcular nómina</button>
    {!! Form::close() !!}
	

    
@endsection