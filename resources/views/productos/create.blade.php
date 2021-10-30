@extends("layout.layout")
@section("titulo", "Registrar producto")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route("productos")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection