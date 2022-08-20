@extends('layouts.master')

@section('content')


    
            <div class="col mb-5">
                    <form class="form-inline my-2 my-lg-1 col-10">
                        <input name= "buscarpor"  class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">¡Buscar!</button>
                    </form>
            </div>
                    <div class="container">
                    <h1>Nuestros Productos </h1>
                        <div class="row">
                            @foreach($productos as $producto)
                                <div class="col-3">
                                    <div class="card" style="width: 18rem;">
                                    <img src="{{ $producto->imagen }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                                            <p class="card-text">Codigo: {{ $producto->codigo }}.</p>
                                            <p class="card-text">Categoria: {{ $producto->categoria_id }}</p>
                                            <p class="card-text">Descripcion: {{ $producto->descripcion }}.</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach 
                        </div>
                    </div><br>
                        <a class="btn btn-danger" href="..." type="button">Eliminar</a>



            
@stop
