@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'procesos.store', 'method' => 'POST']) !!}
        @include('procesos.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection