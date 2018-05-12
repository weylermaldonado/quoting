<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 50; $i++) { 
        $faker = Faker::create();
        \DB::table('empleados')->insert(array(
            'empleado_id' => $i,
            'nombre_empleado'=> $faker->name,
            'type'=> 'empleado',                
            'apellido_empleado'=> $faker->lastname,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
    }
    }
}
