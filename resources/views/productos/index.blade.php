@extends ('layout.layout')
@section('title','Listado de productos')
@section('contenido')

    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-success mb-2">Agregar</a>
         // @include("notificacion")//
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th></tr>
                </thead>
                <tbody>
                @foreach
                    <tr>
                        <td>{{$nombreproducto->nombre}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route("edit",[$producto])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route("niveles.destroy", [$nivel])}}" method="post">
                                @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
