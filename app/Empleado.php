<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use App\Proceso;


class Empleado extends Model
{
    //
    protected $table="empleados";
    protected $primaryKey = 'empleado_id';
    

    protected $casts = [
        'updated_at' => 'datetime:Y-m-d',
    ];

    public function prestamos()
    {
        return $this->hasMany('App\Prestamo');
    }

    public function procesos()
    {
        return $this->belongsToMany('App\Proceso')->withPivot('created_at', 'updated_at');
    }

}
