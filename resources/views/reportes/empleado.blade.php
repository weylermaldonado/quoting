
@extends('app')

@section('content')

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload =function(){
    var chart = new CanvasJS.Chart("chartContainer",{
        title:{
            text: "Procesos realizados"
        }, 
        data:[
            {
                type:"column",
                dataPoints:[
                    @foreach ($array["listaProcesos"] as $proceso)
                    {
                        label: "{{$proceso->nombre_proceso}}", y:{{$array["cuenta_procesos"][$proceso->nombre_proceso]}},
                        //:
                    },
                    @endforeach
                ]
            }
        ]
    });
    chart.render();
    
}


</script>


<div class="row">
  <div class="col-sm-4">
  <span class="btn btn-primary glyphicon glyphicon-Print" onclick="window.print(); return false;"> <h5>Imprimir<h5></span>
  </div>
  <div class="col-sm-4"></div>
  <div class="col-sm-4"><h3>{{$array["fecha"]}}<h3></div>
</div>

<div class="row">

<div class="col-sm-12"><center><h1>Empleado: <code>{{$array["empleado"]->nombre_empleado}} </code><h1></center></div>


</div>


</div>
</div>


<div class="container">
  <h2>registro de procesos</h2>
  <div class="row">
<div class="col-sm-6">
<center>
<kbd>fecha inicial: {{$array["fechaInicial"]}}</kbd>
</center>
</div>
<div class="col-sm-6">
<center>
<kbd>fecha final: {{$array["fechaFinal"]}}</kbd>
</center>
</div>
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
</div>

<div class="row">

<div id="chartContainer">

</div>

@endsection