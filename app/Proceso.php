<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    //
    protected $table="procesos";
    protected $primaryKey = 'proceso_id';
    protected $dateFormat = 'Y-m-d';
    protected $casts = [
        'updated_at' => 'datetime:Y-m-d',
    ];
    
    public function empleados()
    {
        return $this->hasMany('app\Empleado');
    }


}
