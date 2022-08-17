@extends('layouts.master')

@section('content')

<form action="{{route('bodega.store')}}" method="POST">     
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Ingresar Producto</label>
                    <input type="number" class="form-control" id="producto" name="producto">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Ingresar Sucursal</label>
                    <input type="number" class="form-control" id="sucursal" name="sucursal">
                </div>    
                <div class="mb-3">
                    <label for="image" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad">
                </div>            
                <div class="mb-3">
                    <label for="category" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio">
                </div>     
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
@stop