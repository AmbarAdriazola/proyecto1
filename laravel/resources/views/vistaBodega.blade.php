@extends('layouts.master')

@section('content')

<div class="col mb-5">
    <form class="form-inline my-2 my-lg-1 col-10">
        <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">¡Buscar!</button>
    </form>
</div>
<div class="container">
    <h1>Vista de Bodega </h1>
    <div class="row">
        @foreach($bodega as $bodega)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="$bodega->producto()->first()->imagen" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $bodega->producto()->first()->nombre }}</h5>
                    <p class="card-text">sucursal: {{ $bodega->sucursal()->first()->nombre }}.</p>
                    <p class="card-text">precio: {{ $bodega->precio }}</p>
                    <p class="card-text">cantidad: {{ $bodega->cantidad }}.</p>
                    <p class="card-text-muted">creado: {{ $bodega->created_at }}.</p>
                    <p class="card-text-muted">actualizado: {{ $bodega->updated_at }}.</p>
                    <a href="{{ route('bodega.edit', $bodega->id) }}" class="card-link">Editar</a>
                    <form action="{{ route('bodega.destroy', $bodega->id) }}" method ="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="Eliminar" >Eliminar</button>
                    </form>
                </div>
            </div> 
        </div>
        @endforeach
    </div>
</div><br>
@stop