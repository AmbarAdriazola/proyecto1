<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class insertarProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert(array());
    }
}
