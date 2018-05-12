<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Empleado;
use App\Prestamo;
use App\Proceso;
use DateTime;

class nominaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('nomina.index');
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
    public function show(Request $id){

    $nuevaId= $id->search;
    $fechaMinima = new DateTime();
    $fechaMinima->modify('first day of this month');
    $fechaMinima = $fechaMinima->format('d-m-Y');

    $fechaMaxima= date('d-m-Y');



    $empleado = Empleado::find($nuevaId);
    if($empleado==null){
        return view('nomina.usuarioInvalido');
    }


    $contador=0;
    $total=0;
    $array=[];
    $listaProcesos= [];
    foreach ($empleado->procesos as $proceso) {
        $clave_proceso= $proceso->pivot->proceso_id;
        //echo $clave_proceso;
       // $proceso = Proceso::find($clave_proceso);
        
        $nombre_proceso= $proceso->nombre_proceso;
        
        $nuevaFecha = $proceso->pivot->updated_at->toDateString();
        //echo ' fecha minima '.$fechaMinima;
        //echo  ' comparada con '.$nuevaFecha;
        $fechaMin = strtotime($fechaMinima);
        $fechaAct = strtotime($nuevaFecha);
        $fechaMax = strtotime($fechaMaxima);
        $estaEntreMenorFecha = $fechaMin <= $fechaAct;
        $estaEntreMayorFecha = $fechaAct <= $fechaMax;
        //$estaEntreFechas =True;    
        
        if(!isset($array[$nombre_proceso]) &&  $estaEntreMenorFecha && $estaEntreMayorFecha){
            $array[$nombre_proceso]=1;
            $total += $proceso->precio_proceso; 
            $listaProcesos[$contador]=$proceso;
            $contador++;
           // echo 'se agrego nombre '.$proceso.' cantidad '.$array[$proceso];
        }else if($estaEntreMenorFecha && $estaEntreMayorFecha){
            $array[$nombre_proceso]++ ;
            $total += $proceso->precio_proceso; 
        }
    }
    $totalPrestamo=0;
    foreach($empleado->prestamos as $prestamo){
        $totalPrestamo+= $prestamo->cantidad;
    }
    $array2 = [
            "empleado" => $empleado,
            "cuenta_procesos"=> $array,
            "listaProcesos"=> $listaProcesos,  
            "fechaInicial"=> $fechaMinima,
            "fechaFinal"=>$fechaMaxima,
            "total" =>$total,
            "deuda"=> $totalPrestamo,
        ];
        return view('nomina.informacion')->with('array', $array2);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        //
        $idUsuario= $id->search;
        $deuda = $id->deuda;
        $ganancia = $id->ganancia;
        $empleado = Empleado::find($idUsuario);
        
        foreach($empleado->prestamos as $prestamo){
            Prestamo::destroy($prestamo->prestamo_id);
        }

        if($ganancia>=$deuda){

            return view('nomina.index');
        }else{
            $nuevaDeuda = new Prestamo;
            $nuevaDeuda->empleado_id= $empleado->empleado_id;
            $nuevaDeuda->cantidad=$deuda-$ganancia;  
            $nuevaDeuda->save();

            return view('nomina.index');
        }

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
