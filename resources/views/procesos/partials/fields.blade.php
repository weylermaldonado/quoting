<div class="form-group">
    {!! Form::label('proceso_id', 'Clave', ['for' => 'proceso_id'] ) !!}
    {!! Form::text('proceso_id', null , ['class' => 'form-control', 'id' => 'proceso_id', 'placeholder' => 'Clave del proceso', 'required' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('nombre_proceso', 'Nombre', ['for' => 'nombre_proceso'] ) !!}
    {!! Form::text('nombre_proceso', null , ['class' => 'form-control', 'id' => 'nombre_proceso', 'placeholder' => 'Nombre del proceso', 'required' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion_proceso', 'Descripción', ['for' => 'descripcion_proceso'] ) !!}
    {!! Form::text('descripcion_proceso', null , ['class' => 'form-control', 'id' => 'descripcion_proceso', 'placeholder' => 'Descripción del proceso', 'required' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('precio_proceso', 'Precio', ['for' => 'precio_proceso'] ) !!}
    {!! Form::text('precio_proceso', null , ['class' => 'form-control', 'id' => 'precio_proceso', 'placeholder' => 'Precio del proceso' , 'required']  ) !!}
</div>

