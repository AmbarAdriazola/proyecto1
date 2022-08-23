<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function index(Request $request)
  {
    $buscarpor = $request->get('buscarpor');


    if ($buscarpor != null || $buscarpor != '') {
      $productos = Producto::where('nombre', 'like', '%' . $buscarpor . '%')->orwhere('codigo', 'like', '%' . $buscarpor . '%')->get();
    } else {
      $productos = Producto::all();
    }

    return view('tienda', [
      'productos' => $productos
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
    $this->validate($request, [
      'nombre' => 'required',
      'codigo' => 'required',
      'imagen' => 'required',
      'categoria' => 'required',
      'descripcion' => 'required'
    ]);

    $producto = new Producto();
    $producto->nombre = $request->nombre;
    $producto->codigo = $request->codigo;
    $producto->imagen = $request->imagen;
    $producto->categoria_id = $request->categoria;
    $producto->descripcion = $request->descripcion;
    $producto->save();


    return redirect()->route('producto.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $productos = Producto::findOrFail($id);
    return view('producto.update', ['producto' => $productos]);
    /* $productos = Producto::where('codigo', '=', $id)->get();
      return view('producto.update', [
        'productos' => $productos
      ]);*/
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
    /* $this->validate($request, [
      'nombre' => 'required',
      'codigo' => 'required',
      'imagen' => 'required',
      'categoria' => 'required',
      'descripcion' => 'required'
    ]);

    $productos = Producto::where('codigo', '=', $id)->get();

    $producto = new Producto();
    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion;
    $producto->nombre = $request->nombre;
    $producto->save();


    return redirect()->route('producto.index');*/
    $productos = Producto::findOrFail($id);
    $productos->nombre = $request->nombre;
    $productos->precio = $request->precio;
    $productos->descripcion = $request->descripcion;
    $productos->save();
    return redirect()->action([ProductoController::class, 'index']);
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
