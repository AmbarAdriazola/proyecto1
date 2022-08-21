<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodega;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodega = Bodega::get();
        return view('bodega', [ 
          'bodega' => $bodega
        ]);
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
            'producto_id' =>'required',
            'sucursal_id' =>'required',
            'cantidad' => 'required',
            'precio' => 'required'
          ]);
    
          $bodega = new Bodega();
          $bodega->producto_id = $request->producto;
          $bodega->sucursal_id = $request->sucursal;
          $bodega->cantidad = $request->cantidad;
          $bodega->precio = $request->precio;
          $bodega->save();
    
    
            return view('bodega',[
              'bodega'=> $bodega
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
