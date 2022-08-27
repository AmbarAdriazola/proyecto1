@extends('layouts.master')

@section('content')

<form action="{{ route('bodega.update', $bodega->id )}}" method="POST">     
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="code" class="form-label">Ingresar Sucursal</label>
                    <input type="number" class="form-control" id="sucursal" name="sucursal"  value="{{ $bodega->sucursal_id }}">
                </div>    
                <div class="mb-3">
                    <label for="image" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad"  value="{{ $bodega->cantidad }}">
                </div>            
                <div class="mb-3">
                    <label for="category" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio"  value="{{ $bodega->precio }}">
                </div>     
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
@stop

