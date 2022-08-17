<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert(array( 
            [
                'nombre' =>'kiwi' ,
                'codigo'=>'25279', 
                'imagen'=>'jasdlksjfskkfjsdlkfjsdklfjsdlkfjsdf' ,
                'categoria_id'=>1, 
                'descripcion'=>'una fruta citrica'
            ]
        ));

    }
}
