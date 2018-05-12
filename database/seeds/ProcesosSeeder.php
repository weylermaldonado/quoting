<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProcesosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i < 50; $i++) { 
            \DB::table('procesos')->insert(array(
                'proceso_id' => $i,
                'nombre_proceso'=> $faker->randomElement(['BLU03', 'PANT04', 'SHORT34']),
                'descripcion_proceso'=> $faker->randomElement(['Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum']),
                'precio_proceso'=> $faker->randomElement(['0.50', '0.30', '0.45']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
