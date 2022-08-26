@extends('layouts.master')

@section('content')

    <h2>Editar Producto</h2>
    <form action="{{ route('producto.update', $producto->id) }}" method="POST">
        @method('PUT')
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"value="{{ $producto->descripcion }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>


@stop

