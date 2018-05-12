<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call('PrestamosSeeder');
         $this->call('EmpleadosSeeder');
         $this->call('ProcesosSeeder');

        Model::reguard();
    }
}
