@section('content')

<form action="{{route('producto.store')}}" method="POST">     
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Código</label>
                    <input type="number" class="form-control" id="codigo" name="codigo">
                </div>    
                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label>
                    <input type="text" class="form-control" id="imagen" name="imagen">
                </div>            
                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Descripción</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
                </div>       
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>

@stop