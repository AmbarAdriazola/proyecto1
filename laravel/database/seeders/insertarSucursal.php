<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursal')->insert(array(
            [
                'nombre' => 'San Miguel'
            ],
            [   
                'nombre' => 'Santiago centro'
            ],
            [  
                'nombre' => 'providencia'
            ]
        ));
    }
}
