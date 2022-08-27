<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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

    $imagen = $request->file ('imagen');

    if ($imagen){
      $imagen_path = time() . "-" . $imagen->getClientOriginalName();
      \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
    }

    $producto = new Producto();
    $producto->nombre = $request->nombre;
    $producto->codigo = $request->codigo;
    $producto->imagen = $imagen_path;
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

    $producto = Producto::where('codigo', '=', $id)->first();
    return view('actualizar', [
      'producto' => $producto

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

    $producto = Producto::find($id);
    $producto->nombre = $request->nombre;
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
    $producto = Producto::findOrFail($id);
    $producto->delete();

    return redirect()->route('producto.index');
  }

  public function getImagen($filename)
  {
    $file = \Storage::disk('imagenes')->get($filename);
    return new Response($file, 200);
  }
}
