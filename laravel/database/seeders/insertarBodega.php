<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarBodega extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodega')->insert(array( 
            [
                'producto_id' => 1 ,
                'sucursal_id'=> 2, 
                'cantidad'=> '4',
                'precio'=> '61'
            ]
        ));

    }
}
