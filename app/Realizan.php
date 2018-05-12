<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realizan extends Model
{
    protected $table = "realizan";
    protected $primaryKey='id';
    protected $casts = [
        'updated_at' => 'datetime:Y-m-d',
    ];
}
