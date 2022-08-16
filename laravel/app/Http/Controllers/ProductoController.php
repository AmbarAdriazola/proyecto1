<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::get();
        return view('producto.listado', [ //revisar  a que pertenece serie series
          'producto' => $productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
      $this->validate($request,[
        'nombre' =>'required',
        'codigo' =>'required',
        'imagen' => 'required',
        'categoria' => 'required',
        'descripcion' => 'required'
      ]);

      $producto = new Producto();
      $producto->nombre = $request->nombre;
      $producto->codigo = $request->codigo;
      $producto->imagen = $request->imagen;
      $producto->categoria = $request->categoria;
      $producto->descripcion =$request->descripcion;
      dd($request);
      $producto->save();


      //$producto = Producto::get();
        return view('welcome',[
          'producto'=> $producto
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
