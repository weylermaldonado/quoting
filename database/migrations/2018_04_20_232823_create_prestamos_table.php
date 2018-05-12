<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {

            $table->increments('prestamo_id');
            $table->integer('empleado_id')->unsigned();
            $table->float('cantidad');
            $table->timestamps();

            $table->foreign('empleado_id')
                ->references('empleado_id')
                ->on('empleados');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prestamos');
    }
}

