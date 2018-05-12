<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proceso;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procesos = Proceso::get();
        return view('procesos.index')->with('procesos', $procesos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procesos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proceso = new Proceso;
        $proceso->proceso_id = $request->input('proceso_id');
        $proceso->nombre_proceso = $request->input('nombre_proceso');
        $proceso->descripcion_proceso = $request->input('descripcion_proceso');
        $proceso->precio_proceso = $request->input('precio_proceso');

        $proceso->save();
        \Toast::success($proceso->nombre_proceso, 'Proceso creado');
        return redirect()->route('procesos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proceso = Proceso::find($id);
        return view('procesos.edit')->with('proceso',$proceso);
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
        $proceso = Proceso::find($id);
        $proceso->proceso_id = $request->input('proceso_id');
        $proceso->nombre_proceso = $request->input('nombre_proceso');
        $proceso->descripcion_proceso = $request->input('descripcion_proceso');
        $proceso->precio_proceso = $request->input('precio_proceso');
        \Toast::success($proceso->nombre_proceso.' Clave: '.$proceso->proceso_id, 'Proceso actualizado');
        $proceso->save();
        return redirect()->route('procesos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proceso = Proceso::find($id);
        $proceso->delete();
        \Toast::info('#'.$id,'Poroceso eliminado');
        return redirect()->route('procesos.index');
    }

    
}
