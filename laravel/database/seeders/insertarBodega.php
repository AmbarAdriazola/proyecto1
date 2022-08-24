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
                'producto_id' => 2 ,
                'sucursal_id'=> 2, 
                'cantidad'=> '1',
                'precio'=> '61'
            ]
        ));

    }
}
