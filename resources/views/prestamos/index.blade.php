@extends('app')

@section('content')
{!! Form::open([ 'route' => 'prestamos.store', 'method' => 'POST']) !!}
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Asignación de prestamos</b>
                </div>
   
                <div class="col-md-6">
                        <div class="panel-body">
                            <div class="form-group">
                                    {!! Form::label('cantidad', 'Cantidad a prestar', ['for' => 'cantidad'] ) !!}
                                    {!! Form::text('cantidad', null , ['class' => 'form-control', 'id' => 'cantidad', 'placeholder' => 'Cantidad a prestar', 'required' ]  ) !!}
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
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