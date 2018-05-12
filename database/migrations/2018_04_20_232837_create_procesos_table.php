<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proceso_id')->unique();

            $table->string('nombre_proceso');
            $table->string('descripcion_proceso');
            $table->float('precio_proceso')->unsigned();
            $table->timestamps();
        });


        Schema::create('empleado_proceso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id')->unsigned();
            $table->string('proceso_id');

            $table->foreign('empleado_id')
                ->references('empleado_id')
                ->on('empleados');
            $table->foreign('proceso_id')
                ->references('proceso_id')
                ->on('procesos');

            $table->timestamps();
        }) ; 



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('procesos');
    }
}


