@extends("layout.layout")
@section("titulo", "Registrar producto")
@section("contenido")

     <form action="{{ route('productos.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
		
        <select class="form-select" aria-label="Default select example" name="VENDEDOR_ID">
          <option value="">Elegir Vendedor</option>
          @foreach($productos as $productos)
          <option value="VENDEDOR_ID" >{{$productos-> VENDEDOR_ID}}</option>
          @endforeach
        </select>
        
            
        
		
               

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

		<div class="d-grid gap-12">
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
		
	</form>
    
    @endsection
     


