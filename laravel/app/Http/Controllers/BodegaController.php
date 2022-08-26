<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodega;
use App\Models\Sucursal;
use App\Models\Producto;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodega = Bodega::all();
        $producto = Producto::all();
        $sucursal = Sucursal::all();
        return view('vistaBodega', [ 
          'bodega' => $bodega, 
          'producto' => $producto,
          'sucursal' => $sucursal
        ], compact('bodega', 'producto', 'sucursal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarBodega');
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
            'cantidad' => 'required',
            'precio' => 'required'
        ]);
            $bodega = new Bodega();
            $bodega->producto_id = $request->producto;
            $bodega->sucursal_id = $request->sucursal;
            $bodega->cantidad = $request->cantidad;
            $bodega->precio = $request->precio;
            $bodega->save();
    
            return redirect()->route('bodega.index');
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
        $productos = Producto::where('codigo', '=', $id)->first();
        // dd($productos);
          return view('actualizar', [
            'producto' => $productos
          ]);
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
            
    $this->validate($request, [
        'nombre' => 'required',
        'precio' => 'required',
        'descripcion' => 'required'
      ]);
  
      $productos = Producto::where('codigo', '=', $id)->first();
  
      $producto = new Producto();
      $producto->nombre = $request->nombre;
      $producto->precio = $request->precio;
      $producto->descripcion = $request->descripcion;
      $producto->save();
  
  
      return redirect()->route('producto.index');
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
