@extends('app')
		    			    
@section('content')



<div class="row">
  <div class="col-sm-4">
  <span class="btn btn-primary glyphicon glyphicon-Print" onclick="window.print(); return false;"> <h5>Imprimir<h5></span>
  </div>
  <div class="col-sm-4"></div>

</div>

<div class="row">

<div class="col-sm-12"><center><h1>Empleado: <code>{{$array["empleado"]->nombre_empleado}} </code><h1></center></div>


</div>


</div>
</div>


<div class="container">
  <h2>registro de procesos</h2>
  <div class="row">
</div>
  <p><h4>Número de procesos realizados por el empleado <code>{{$array["empleado"]->empleado_id}}</code>:<h4></p>            
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Nombre proceso</th>
        <th>cantidad de veces realizado</th>
        <th>precio del proceso</th>
        <th>total </th>
      </tr>
    </thead>
    <tbody>
    @foreach ($array["listaProcesos"] as $proceso)
      <tr>
        <td>{{$proceso->nombre_proceso}}</td>
        <td>{{$array["cuenta_procesos"][$proceso->nombre_proceso]}}</td>
        <td>$ {{$proceso->precio_proceso}}<sup>MXN</sup></td>
        <td>{{ ($proceso->precio_proceso)*($array["cuenta_procesos"][$proceso->nombre_proceso])}} </td>
      </tr>
      @endforeach
      <tr>
        <td></td>
        <td></td>
        <td>Prestamos Realizados: {{$array["deuda"]}}</td>
        <td><strong> Total </strong>{{$array["total"]}}</td>

      </tr>

    </tbody>
  </table>
  {!! Form::open([ 'route' => 'nomina.edit', 'method' => 'GET']) !!}
       id del empleado: <input type="text"  value="{{$array["empleado"]->empleado_id}}" name="search" class="form-control"  placeholder="Clave de empleado" required="true" >
       cantidad que debe el empleado: <input type="text"  value="{{$array["deuda"]}}"  name="deuda" class="form-control"  placeholder="Clave de empleado" required="true" >
        ganancias del empleado este mes: <input type="text"  value="{{$array["total"]}}" name="ganancia" class="form-control"  placeholder="Clave de empleado" required="true" >
         
         <button type="submit" class="btn btn-success btn-block">pagar</button>
    {!! Form::close() !!}

</div>
    
@endsection