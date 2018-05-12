@extends('app')

@section('content')
    <h4 class="text-center">Editar Proceso: {{ $proceso->nombre_proceso  }}</h4>
    {!! Form::model($proceso, [ 'route' => ['procesos.update', $proceso], 'method' => 'PUT']) !!}
        @include('procesos.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection