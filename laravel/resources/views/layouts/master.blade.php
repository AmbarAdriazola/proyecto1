<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Sistema de Inventario</title>
</head>

<body>
    @section('header')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">GRUPO 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="/prueba">Prueba</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tienda</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('producto.index') }}">Nuestros Productos</a></li>
                            <li>
                                <hr class="dropdown-divider"/>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('producto.create') }}">Nuevos Productos</a></li>
                            <li><a class="dropdown-item" href="#!">Stock Productos</a></li>
                            <li><a class="dropdown-item" href="{{ route('bodega.create') }}">Insertar bodega</a></li>
                            <li><a class="dropdown-item" hr ef="#!">Vista Bodega</a></li>
                        </ul>
                    </li>
                </ul>   
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <a class="dropdown-item" href="http://127.0.0.1:8000/login">Iniciar Sesion</a>
                    </button>
                    </form>
            </div>
        </div>
    </nav>

    <header class="bg-dark py-4">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"><b>Inventario Stock</b> - Evaluacion 3</h1>
                <br>
                <p class="lead fw-normal text-white-50 mb-0">Tienda de Productos Online</p>
            </div>
        </div>
    </header>
    @show

    <div class="container">
        <hr>
        @yield('content')
    </div>

    @section('footer')
    <div class="container">
        <hr>

    </div>
    @show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>