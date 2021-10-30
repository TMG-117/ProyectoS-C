@extends ('layout.layout')
@section('title','Listado de productos')
@section("contenido")
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route("edit", [$producto])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required value="{{$producto->NombreProducto}}" autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection