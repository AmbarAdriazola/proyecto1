<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;
use App\Models\Producto;

class SucursalController extends Controller
{
  public function index($id){

    $producto = Producto::where('id', $id)->get();
    
    $sucursal=sucrsal::where('producto_id', $id)->get();

    return view('sucursal.listado',[
        'producto' => $producto,
        'sucursal' => $sucursal
    ]);
}

public function search($search=null){
    if(is_null($search)){
        $search = \Request::get('search');
    }

    $sucursal = Sucursal::where('name', 'LIKE', '%'.$search.'%')->get();
    return view('sucursal.listado')
    ->with(
        array(
            'sucursal' => $sucursal,
            'search' => $search
        )
    );      
}

};