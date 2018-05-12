<h1 class="text-primary">Control de Empleados</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Clave</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td class="text-center">{{ $empleado->empleado_id }}</td>
            <td class="text-center">{{ $empleado->nombre_empleado }}</td>
            <td class="text-center">{{ $empleado->type }}</td>
        <td class="text-center">{{ $empleado->apellido_empleado }}</td>

        {!! Form::open([ 'method'  => 'delete', 'route' => [ 'empleados.destroy', $empleado->empleado_id ] ]) !!}
        
                
            <td class="text-center">
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
               <a href="{{ url('/empleados/'.$empleado->empleado_id.'/edit') }}" class="btn btn-info btn-s">
                    Editar
                </a>
                <a href="{{ URL::to('/empleados/'.$empleado->empleado_id) }}" class="btn btn-warning btn-s">
                    Mostrar
                </a>
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
    <tfoot>
    <tr>
        <th class="text-center">Clave</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
  </tbody>
</table>