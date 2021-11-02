@extends ('layout.layout')
@section('title','Listado de productos')
@section('contenido')
<link rel="stylesheet" type="text/css" href="estilos/css">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
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
