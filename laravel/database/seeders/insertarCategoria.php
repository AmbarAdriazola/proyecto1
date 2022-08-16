<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert(array(
            [
                'nombre'=>'Frutas'
            ],  [
                'nombre'=>'Verduras'
            ]
            ));
    }
}
