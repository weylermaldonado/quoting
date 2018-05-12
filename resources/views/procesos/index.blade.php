@extends('app')


@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/procesos/create') }}" role="button">Nuevo proceso</a>
    @include('procesos.partials.table')
@endsection

