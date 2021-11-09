@extends ('layout.layout')
@section('title','Editar Producto')
@section("contenido")

<h3>Editar producto</h3>
	
<form action="{{route('productos.update', $producto->PRODUCTO_ID) }}" method="POST">
@csrf
@method('PUT')
	<div class="col-md-3">
		<label for="CLIENTE_ID" class="form-label">Cliente</label>
			<select id="CLIENTE_ID" class="form-select" name="CLIENTE_ID">
				<option value="" selected>Seleccione...</option>
			@foreach($clientes as $cliente)
			<option value="{{$cliente-> CLIENTE_ID}}">{{ $cliente-> NOMBRECLIENTE }}</option>
			@endforeach 
		</select>
	</div>
	<div class="col-md-3">
		<label for="PREVEEDOR_ID" class="form-label">Proveedor</label>
		    <select id="PREVEEDOR_ID" class="form-select" name="PREVEEDOR_ID">
			    <option value="" selected>Seleccione...</option>
			    @foreach($proveedores as $proveedor)
				    <option value="{{$proveedor-> PREVEEDOR_ID}}">{{ $proveedor-> NOMBRE_PROVEEDOR }}</option>
			    @endforeach
		    </select>
	</div>
	<div class="col-md-3">
		<label for="VENDEDOR_ID" class="form-label">VENDEDOR</label>
		    <select id="VENDEDOR_ID" class="form-select" name="VENDEDOR_ID">
			    <option value="" selected>Seleccione...</option>
			    @foreach($vendedores as $vendedor)
				    <option value="{{$vendedor ->VENDEDOR_ID}}">{{$vendedor-> NOMBREVENDEDOR }}</option>
			    @endforeach
	        </select>
	</div>
    	
	<div class="col-md-6">
		<label for="nombre" class="form-label">Nombre Producto</label>
		<input type="text" class="form-control" id="NOMBREPRODUCTO" name="NOMBREPRODUCTO" value="{{$producto-> NOMBREPRODUCTO}}">		
	</div>

	<div class="col-md-6">
	<label for="nombre" class="form-label">Precio Venta</label>
		<input type="text" class="form-control" id="PRECIOVENTA" name="PRECIOVENTA" value="{{$producto-> PRECIOVENTA}}">
    </div>

	<div class="col-md-6">
		<label for="nombre" class="form-label">Precio Compra</label>
		<input type="text" class="form-control" id="PRECIOCOMPRA" name="PRECIOCOMPRA" value="{{$producto-> PRECIOCOMPRA}}">
	</div>
        
	<div class="col-md-6">
		<label for="nombre" class="form-label">Stock Minimo</label>
		<input type="text" class="form-control" id="STOCKMINIMO" name="STOCKMINIMO" value="{{$producto-> STOCKMINIMO}}">
	</div>

	<div class="col-md-6">
		<label for="nombre" class="form-label">Stock Minimo</label>
		<input type="text" class="form-control" id="FICHATECNICA" name="FICHATECNICA" value="{{$producto->FICHATECNICA}}">		
	</div>
		
	<div class="col-md-6">
	<button type="submit" class="btn btn-dark">Editar</button>		
	</div>
</form> 
@endsection
