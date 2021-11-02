@extends ('layout.layout')
@section('title','Listado de productos')
@section('contenido')

<h3>Listado de productos</h3>
<a class="btn btn-success" href="{{ url('/productos/create') }}" role="button">Nuevo producto</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
	  <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-success">Editar</button></td>
      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><button type="button" class="btn btn-success">Editar</button></td>
      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>bird</td>
      <td>@twitter</td>
     <td><button type="button" class="btn btn-success">Editar</button></td>
      <td><button type="button" class="btn btn-danger">eliminar</button></td>
    </tr>
  </tbody>
</table>    
@endsection
