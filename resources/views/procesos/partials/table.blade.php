<h1 class="text-primary">Control de Procesos</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Clave</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($procesos as $proceso)
        <tr>
            <td class="text-center">{{ $proceso->proceso_id }}</td>
            <td class="text-center">{{ $proceso->nombre_proceso }}</td>
            <td class="text-center">{{ $proceso->descripcion_proceso }}</td>
        <td class="text-center">{{ $proceso->precio_proceso }}</td>

        {!! Form::open([ 'method'  => 'delete', 'route' => [ 'procesos.destroy', $proceso->proceso_id ] ]) !!}
        
                
            <td class="text-center">
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
               <a href="{{ url('/procesos/'.$proceso->proceso_id.'/edit') }}" class="btn btn-info btn-s">
                    Editar
                </a> 
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
    <tfoot>
    <tr>
        <th class="text-center">Clave</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
  </tbody>
</table>