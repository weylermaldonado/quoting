<div class="form-group">
    {!! Form::label('empleado_id', 'Clave', ['for' => 'empleado_id'] ) !!}
    {!! Form::text('empleado_id', null , ['class' => 'form-control', 'id' => 'empleado_id', 'placeholder' => 'Clave del empleado', 'required' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('nombre_empleado', 'Nombre', ['for' => 'nombre_empleado'] ) !!}
    {!! Form::text('nombre_empleado', null , ['class' => 'form-control', 'id' => 'nombre_empleado', 'placeholder' => 'Nombre del empleado', 'required' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('type', 'tipo', ['for' => 'type'] ) !!}
    {!! Form::text('type', null , ['class' => 'form-control', 'id' => 'type', 'placeholder' => 'Tipo de empleado', 'required' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('apellido_empleado', 'Apellido', ['for' => 'apellido_empleado'] ) !!}
    {!! Form::text('apellido_empleado', null , ['class' => 'form-control', 'id' => 'apellido_empleado', 'placeholder' => 'Apellido del empleado' , 'required']  ) !!}
</div>

