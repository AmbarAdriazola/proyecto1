<!-- @extends('layouts.master')

@section('content')

@if($errors->any())
    <p class="error-message">{{$errors->first('mensaje')}}</p>
@endif
<br>
<a href="{{ route('producto.edit', $producto->id) }}">Editar</a> <br>
<form action="{{ route('producto.destroy', $producto->id) }}" method ="POST" >
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Producto')">
</form>

@stop

$buscarpor = $request->get('buscarpor');


if ($buscarpor != null || $buscarpor != '') {
  $productos = Producto::where('nombre', 'like', '%' . $buscarpor . '%')->orwhere('codigo', 'like', '%' . $buscarpor . '%')->get();
} else {
  $productos = Producto::all();
} -->