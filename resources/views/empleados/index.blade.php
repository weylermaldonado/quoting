@extends('app')


@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/empleados/create') }}" role="button">Agregar empleado</a>
    @include('empleados.partials.table')
@endsection

