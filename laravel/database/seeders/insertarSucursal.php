<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class insertarSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursal')->insert(array());
    }
}
