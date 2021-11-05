@extends("layout.layout")
@section("titulo", "Registrar producto")
@section("contenido")

     <form action="{{ route('productos.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
		
		<div class="col-md-5">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="NOMBREPRODUCTO">
		</div>
		<div class="col-md-5">
			<label for="precio_venta" class="form-label">Precio venta</label>
			<input type="number" class="form-control" id="precio_venta" name="PRECIOVENTA">
		</div>
		<div class="col-md-5">
			<label for="precio_compra" class="form-label">Precio compra</label>
			<input type="number" class="form-control" id="precio_compra" name="PRECIOCOMPRA">
		</div>
		<div class="col-md-5">
			<label for="stock_minimo" class="form-label">Stock mínimo</label>
			<input type="number" class="form-control" id="stock_minimo" name="STOCKMINIMO">
		</div>
		<div class="col-md-5">
			<label for="FichaTecnica" class="form-label">Ficha Tecnica</label>
            <input type="text" class="form-control" id="FichaTecnica" name="FICHATECNICA">
		</div>
		<div class="d-grid gap-12">
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
		
	</form>
    
    @endsection
     


