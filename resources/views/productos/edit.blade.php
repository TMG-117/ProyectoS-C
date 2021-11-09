@extends ('layout.layout')
@section('title','Listado de productos')
@section("contenido")
<form action="{{ route('productos.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
 ($productos as $productos)
 <div class="col-md-5">
	<label for="nombre" class="form-label">Nombre</label>
	<input type="text" class="form-control"   value="{{$productos->NOMBREPRODUCTO}}">
 </div><div class="col-md-5">
    <label for="precio_venta" class="form-label">Precio venta</label>
    <input type="number" class="form-control" value="{{$productos->PRECIOVENTA}}">
 </div>
 <div class="col-md-5">
	<label for="precio_compra" class="form-label">Precio compra</label>
	<input type="number" class="form-control" value="{{$productos->PRECIOCOMPRA}}">
 </div>
 <div class="col-md-5">
	<label for="stock_minimo" class="form-label">Stock mínimo</label>
	<input type="number" class="form-control" value="{{$productos->SOTCKMINIMO}}">
 </div>
 <div class="col-md-5">
	<label for="FichaTecnica" class="form-label">Ficha Tecnica</label>
    <input type="number" class="form-control" value="{{$productos->FICHATECNICA}}">
 </div>
 <div class="d-grid gap-12">
	<button type="submit" class="btn btn-primary">Editar</button>
 </div>		
</form> 
 
@endsection
