@extends('app')

@section('content')
    <h4 class="text-center">Editar Empleado: {{ $empleados->nombre_empleado  }}</h4>
    {!! Form::model($empleados, [ 'route' => ['empleados.update', $empleados], 'method' => 'PUT']) !!}
        @include('empleados.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection