@extends ('layout.layout')
@section('title','Listado de productos')
@section('contenido')

<h3>Listado de productos</h3>
<a class="btn btn-success" href="{{ url('/productos/create') }}" role="button">Nuevo producto</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nro</th>      
      <th scope="col">Nombre Del Producto</th>
      <th scope="col">Precio Venta</th>
      <th scope="col">Precio Compra</th>
	    <th scope="col">Stock Minimo</th>
      <th scope="col">Ficha tecnica</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($productos as $productos)
		<tr>
		  <th scope="row">{{$productos-> PRODUCTO_ID}}</th>      
      <td>{{$productos-> NOMBREPRODUCTO}}</td>
		  <td>{{$productos-> PRECIOVENTA}}</td>
		  <td>{{$productos-> PRECIOCOMPRA}}</td>
		  <td>{{$productos-> STOCKMINIMO}}</td>
		  <td>{{$productos-> FICHATECNICA}}</td>
		  <td>
			  <form  method="POST">
          <a href="{{route('productos.edit', $productos->PRODUCTO_ID)}}">Editar</a>
           
        </form>
		  </td>                      
		</tr>
    @endforeach
   </tbody>
</table>    
@endsection

