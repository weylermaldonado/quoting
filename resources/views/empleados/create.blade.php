@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'empleados.store', 'method' => 'POST']) !!}
        @include('empleados.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection