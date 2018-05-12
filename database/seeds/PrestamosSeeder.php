<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PrestamosSeeder extends Seeder
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
            \DB::table('prestamos')->insert(array(
                //'clave_prestamo' => $i,
                'cantidad'=> $faker->randomElement(['1000', '2000', '3000']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
