
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asignación de procesos</title>
    @include('toast::messages')
    @section('styles_laravel')
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/datatable-bootstrap.css') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}
    <style>
        .loading {
            position: absolute;
            top: 50%;
            left: 50%;
            display: none;
        }
        .loading-bar {
            display: inline-block;
            width: 4px;
            height: 18px;
            border-radius: 4px;
            animation: loading 1s ease-in-out infinite;
        }
        .loading-bar:nth-child(1){
            background-color: #3498bd;
            animation-delay: 0;
        }
        .loading-bar:nth-child(2) {
            background-color: #c0392b;
            animation-delay: 0.09s;
        }
        .loading-bar:nth-child(3) {
            background-color: #f1c40f;
            animation-delay: .18s;
        }
        .loading-bar:nth-child(4) {
            background-color: #27ac60;
            animation-delay: .27s;
        }
        @keyframes loading {
            0% {
                transform: scale(1);
            }
            20%{
                transform: scale(1,2.2);
            }
            40% {
                transform: scale(1);
            }
        }
        .table-empleados {
            max-height: 200px;
    }
    body{
        
        background-image: url(images/fondo.jpg);
    
    }
    </style>
</head>
<body>
    {{-- EMPIEZA NAVBAR --}}
    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Yuma textiles</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{URL::to('/')}}">Inicio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{route('auth/login')}}">Inicio de sesión</a></li>
                            <li><a href="{{route('auth/register')}}">Registrarse</a></li>
                        @else
                            <li>
                                <a href="#">{{ Auth::user()->name }}</a>
                            </li>
                            <li><a href="{{route('auth/logout')}}">Salir</a></li>
                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    {{-- TERMINAR NAVBAR --}}
    {{-- EMPIEZA BUSCADOR --}}
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Asignación de procesos</b>
                </div>
                    <div class="col-md-4">
                        <div class="panel-body">
                            <div class="form-group">
                                <input name="search" id="search" class="form-control" placeholder="Buscar empleado por clave, nombre, apellido...">
                            </div>
                            <div class="table-responsive">
                                <div class="loading">
                                    <div class="loading-bar"></div>
                                    <div class="loading-bar"></div>
                                    <div class="loading-bar"></div>
                                </div>
                                <table class="table table-hover table-dordered table-condensed table-empleados">
                                    <thead>
                                        <tr>
                                            <th>Clave</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                        </tr>
                                        <tbody id="table-empleados">
                                            {{-- Aquí va la respuesta de la BD --}}
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- segunda tabla --}}
                    <div class="col-md-4">
                        <div class="panel-body">
                            <div class="form-group">
                                <input name="searchProcesos" id="searchProcesos" class="form-control" placeholder="Buscar proceso por clave, nombre, descripción...">
                            </div>
                            <div class="table-responsive">
                                <div class="loading">
                                    <div class="loading-bar"></div>
                                    <div class="loading-bar"></div>
                                    <div class="loading-bar"></div>
                                </div>
                                <table class="table table-hover table-dordered table-condensed table-empleados">
                                    <thead>
                                        <tr>
                                            <th>Clave</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                        </tr>
                                        <tbody id="table-procesos">
                                            {{-- Aquí va la respuesta de la BD --}}
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- tercera tabla --}}
                    <div class="col-md-4">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="loading">
                                    <div class="loading-bar"></div>
                                    <div class="loading-bar"></div>
                                    <div class="loading-bar"></div>
                                </div>
                                <table class="table table-hover table-dordered table-condensed table-empleados">
                                    <thead>
                                        <tr>
                                            <th>Clave</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            {{--  <th>Clave proceso</th>
                                            <th>Nombre proceso</th>
                                            <th>Descripción proceso</th>  --}}
                                        </tr>
                                        <tbody id="tabla-respuesta"class="connectedSortable">
                                            <tr>
                                                {{--  Arrastrar y soltar datos  --}}
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    {{-- TERMINA BUSCADOR --}}
{{-- SCRIPTS --}}
<script type="text/javascript">
    $('#search').on('keyup', function() {
        var value = $(this).val();
       // $('.loading').show();
        $.ajax({
            type : 'get',
            url  : '{{URL::to('showEmpleados')}}',
            data : { 'search':value},
            success:function(data) {
                //console.log(data);
                $('#table-empleados').html(data);
                $('.loading').hide();
            }
            $("#table-empleados:contains(value)").css("font-weight", "bold");
        });
        //console.log($(this).val().length)
    })
</script>
<script>
    $(function() {
        $( "#table-empleados, #tabla-respuesta, #table-procesos" ).sortable({
          connectWith: ".connectedSortable"
        }).disableSelection();
    });
</script>
<script>
    $('#searchProcesos').on('keyup', function() {
        var value = $(this).val();
        var isEmpty = $(this).val();
       // $('.loading').show();
        $.ajax({
            type : 'get',
            url  : '{{URL::to('showProcesos')}}',
            data : { 'search':value},
            success:function(data) {
                //console.log(data);
                $('#table-procesos').html(data);
                $('.loading').hide();
            }
        });
        //console.log($(this).val().length)
    })
</script>
<!-- Scripts -->    
{!! Html::script('assets/js/jquery.js') !!}
{!! Html::script('assets/js/jquery.dataTables.js') !!}
{!! Html::script('assets/js/bootstrap.min.js') !!}

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>
</html>