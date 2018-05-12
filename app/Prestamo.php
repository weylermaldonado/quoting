<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    //
    protected $table="prestamos";
    protected $primaryKey = 'prestamo_id';

    public function empleado()
    {
        return $this->belongsTo('app\Empleado');
    }

}
