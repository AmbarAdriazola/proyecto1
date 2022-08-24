@extends('layouts.master')

@section('content')

<body>
    <a href="{{ route('producto.index') }}"> Ver listado Productos</a>
    <h2>Editar Producto</h2>
    <form action="{{ route('producto.update', $producto->codigo) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}">
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"value="{{ $producto->descripcion }}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</body>

@stop

