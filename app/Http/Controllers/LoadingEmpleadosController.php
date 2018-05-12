<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class LoadingEmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loading.empleados');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showEmpleados(Request $request)
    {
        if ($request->ajax())
        {
            $output = "";
            $empleados = DB::table('empleados') -> 
            where('nombre_empleado','LIKE', '%'.$request->search.'%') -> 
            orWhere('apellido_empleado','LIKE', '%'.$request->search.'%') ->
            orWhere('clave_empleado', $request->search) ->
            get();

            if ($empleados)
            {
                foreach ($empleados as $key => $empleado)
                {
                    $output.= 
                    '<tr>'.
                        '<td>'.$empleado->clave_empleado.'</td>'.
                        '<td>'.$empleado->nombre_empleado.'</td>'.
                        '<td>'.$empleado->apellido_empleado.'</td>'.
                    '</tr>';
                }

                return Response($output);
            }
        }
    }
    public function showProcesos(Request $request)
    {
        if ($request->ajax())
        {
            $output = "";
            $procesos = DB::table('procesos') -> 
            where('nombre_proceso','LIKE', '%'.$request->search.'%') -> 
            orWhere('descripcion_proceso','LIKE', '%'.$request->search.'%') ->
            orWhere('clave_proceso', $request->search) ->
            get();

            if ($procesos)
            {
                foreach ($procesos as $key => $proceso)
                {
                    $output.= 
                    '<tr>'.
                        '<td>'.$proceso->clave_proceso.'</td>'.
                        '<td>'.$proceso->nombre_proceso.'</td>'.
                        '<td>'.$proceso->descripcion_proceso.'</td>'.
                    '</tr>';
                }

                return Response($output);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
