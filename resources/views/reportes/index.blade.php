@extends('app')
		    			    
@section('content')
    
    </script>
    <script>
    
</script>
    <script type="text/javascript">

    </script>

<span> <center> <h1 id="titulo" class="titulo">Introduce la clave de usuario</h1><center></span>
{!! Form::open([ 'route' => 'reportes.show', 'method' => 'GET']) !!}
    <div class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
    <input type="text" id="search" name="search" class="form-control"  placeholder="Clave de empleado" required="true">

    </div>
         
         
    
    
    <div class="row">
    <span><h3>elija las fechas de inicio y de fin 
            que incluira su reporte</h3></span>
        <div class="col-sm-6">
            
            <p>Fecha de inicio: <input type="date" name="fechaMinima"
            min="2018-01-01 00-00-00" 
            id="campofecha"></p>
            
            
        </div>
        <div class="col-sm-6">
        
            <p>Fecha de finaL: <input name="fechaMaxima" type="date" 
            name="fechaMaxima"
            min="2015-02-20" 
                
            id="campofecha"></p>

        
        </div>

    </div>
    <button type="submit" class="btn btn-success btn-block">generar reporte</button>
    {!! Form::close() !!}
	</div>

    
@endsection