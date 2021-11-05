@extends ('layout.layout')
@section('title','Listado de productos')
@section('contenido')

<h3>Listado de productos</h3>
<a class="btn btn-success" href="{{ url('/productos/create') }}" role="button">Nuevo producto</a>
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
    @foreach ($productos as $producto)
    <tr>
      <th scope="row">{{$producto-> PRODUCTO_ID}}</th>
      <td>{{$producto-> NOMBREPRODUCTO}}</td>
      <td>{{$producto-> PRECIOVENTA}}</td>
      <td>{{$producto-> PRECIOCOMPRA}}</td>
      <td>{{$producto-> STOCKMINIMO}}</td>
      <td>{{$producto-> FICHATECNICA}}</td>
      <td><a href="{{ route('productos.edit', $producto->PRODUCTO_ID) }}" class="btn btn-secondary">Editar</a></td>
      @csrf
      @method('DELETE')
      <td> <button type="submit" class="btn btn-warning">Eliminar</button></td>                       
    </tr>
    @endforeach
   </tbody>
</table>    
@endsection

