<?php

namespace App\Http\Controllers;

use Illuminate\App\Http\Request;
use Illuminate\App\Http\Response;

class ProductoController extends Controller
{
public function index(){
    $producto = Producto::get();
    return view('producto.listado', [ //revisar  a que pertenece serie series
      'producto' => $producto
    ]);
  }
  public function create(){
    return view('producto.agregar');
  }

  public function store(Request $request){

      $this ->validate($request,[
        'nombre' =>'required',
        'codigo' =>'required',
        'imagen' => 'required',
        'categoria' => 'required',
        'precio'=> 'required',
        'sucursal' => 'required',
        'cantidad' => 'required',
        'desc' => 'required'
      ]);

      $producto = new Producto();
      $producto->nombre = $request->nombre;
      $producto->codigo = $request->codigo;
      $producto->imagen = $request->imagen;
      $producto->categoria = $request->categoria;
      $producto->precio = $request->precio;
      $producto->surcusal = $request->sucursal;
      $producto->cantidad = $request->cantidad;
      $producto->desc =$request->desc;
      $producto->save();

      $producto = Producto::get();
        return view('producto.listado',[
          'producto'=> $producto
        ]);
  }

};