@extends ('layout.layout')
@section('title','Listado de productos')
@section('contenido')

<h3>Listado de productos</h3>
<a class="btn btn-success" href="{{ url('/productos/create') }}" role="button">Nuevo producto</a>
<a class="btn btn-success" href="{{ url('/productos/edit') }}" role="button">editar producto</a>
<?php //prueba de editar ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nro</th>
      <th scope="col">Nombre Del Producto</th>
      <th scope="col">Precio Venta</th>
      <th scope="col">Precio Compra</th>
	  <th scope="col">Stock Minimo</th>
      <th scope="col">Ficha tecnica</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>HP Pavillion</td>
      <td>850.000</td>
      <td>700.000</td>
      <td>15</td>
      <td>procesador I5,8GB Ram, Nvidia1650TI</td>
      <td><button type="button" class="btn btn-success">Editar</button></td>
      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ASUS VivoBook</td>
      <td>400.000</td>
      <td>350.000</td>
      <td>15</td>
      <td>Intel Pentium Gold 5405u, 4GB Ram,256Gb SSD</td>
      <td><button type="button" class="btn btn-success">Editar</button></td>
      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>ACER Nitro</td>
      <td>950.000td>
      <td>800.000</td>
      <td>5</td>
      <td>Intel I5,16GB Ram,Nvidia 1650, 512 SSD</td>
     <td><button type="button" class="btn btn-success">Editar</button></td>
      <td><button type="button" class="btn btn-danger">eliminar</button></td>
    </tr>
  </tbody>
</table>    
@endsection
