@extends('app')

@section('content')
    <h3>Empleado: {{$empleado->nombre_empleado}} {{$empleado->apellido_empleado}} Clave: {{$empleado->empleado_id}}</h3>
    
    <label for="">Seleccione procesos para el empleado {{$empleado->nombre_empleado}}</label>
    <select multiple class="form-control" name="" id="">
        @foreach($proceso as $p)
            <option value="clave-proceso">{{$p->clave_proceso}}--{{$p->nombre_proceso}}</option>
        @endforeach
    </select>
    
@endsection