@extends('app')

@section('content')
{!! Form::open([ 'route' => 'realizan.store', 'method' => 'POST']) !!}
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Asignación de procesos</b>
                </div>
                <div class="col-md-4">
                    <div class="panel-body">
                        <div class="form-group">
                                {!! Form::label('proceso_id', 'Clave del proceso', ['for' => 'proceso_id'] ) !!}
                                {!! Form::text('proceso_id', null , ['class' => 'form-control', 'id' => 'proceso_id', 'placeholder' => 'Clave del proceso', 'required' ]  ) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="panel-body">
                            <div class="form-group">
                                    {!! Form::label('empleado_id', 'Clave del empleado', ['for' => 'empleado_id'] ) !!}
                                    {!! Form::text('empleado_id', null , ['class' => 'form-control', 'id' => 'empleado_id', 'placeholder' => 'Clave del epleado', 'required' ]  ) !!}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    {!! Form::close() !!}
@endsection