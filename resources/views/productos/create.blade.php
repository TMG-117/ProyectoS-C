@extends('layout.layout')
@section('title','Nuevo')
@section('contenido')
<h2>Crear nuevo producto</h2>
	
<form action="{{ route('productos.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">

@csrf

	<div class="col-md-3">
		<label for="CLIENTE_ID" class="form-label">Cliente</label>
			<select id="CLIENTE_ID" class="form-select" name="CLIENTE_ID">
				<option value="" selected>Seleccione...</option>
				@foreach($clientes as $c)
					<option value="{{ $c->CLIENTE_ID }}">{{ $c->NOMBRECLIENTE }}</option>
				@endforeach
		</select>
	</div>
	<div class="col-md-3">
		<label for="PREVEEDOR_ID" class="form-label">Proveedor</label>
		    <select id="PREVEEDOR_ID" class="form-select" name="PREVEEDOR_ID">
			    <option value="" selected>Seleccione...</option>
			    @foreach($proveedores as $p)
				    <option value="{{ $p->PREVEEDOR_ID }}">{{ $p->NOMBRE_PROVEEDOR }}</option>
			    @endforeach
		    </select>
	</div>
	<div class="col-md-3">
		<label for="VENDEDOR_ID" class="form-label">VENDEDOR</label>
		    <select id="VENDEDOR_ID" class="form-select" name="VENDEDOR_ID">
			    <option value="" selected>Seleccione...</option>
			    @foreach($vendedores as $v)
				    <option value="{{ $v-> VENDEDOR_ID}}">{{ $v->NOMBREVENDEDOR }}</option>
			    @endforeach
	        </select>
	</div>
    		
	<div class="col-md-6">
		<label for="NOMBREPRODUCTO" class="form-label">Nombre</label>
		<input type="text" class="form-control" id="NOMBREPRODUCTO" name="NOMBREPRODUCTO">
	</div>

	<div class="col-md-6">
		<label for="PRECIOVENTA" class="form-label">Precio venta</label>
		<input type="number" class="form-control" id="PRECIOVENTA" name="PRECIOVENTA">
	</div>

	<div class="col-md-6">
		<label for="PRECIOCOMPRA" class="form-label">Precio compra</label>
		<input type="number" class="form-control" id="PRECIOCOMPRA" name="PRECIOCOMPRA">
	</div>

	<div class="col-md-6">
		<label for="STOCKMINIMO" class="form-label">Stock mínimo</label>
		<input type="number" class="form-control" id="STOCKMINIMO" name="STOCKMINIMO">
	</div>

	<div class="col-md-6">
		<label for="FICHATECNICA" class="form-label">Ficha Tecnica</label>
        <input type="text" class="form-control" id="FICHATECNICA" name="FICHATECNICA">
	</div>
		
	<div class="d-grid gap-2">
		<button type="submit" class="btn btn-primary">Registrar</button>
	</div>
</form>
@endsection