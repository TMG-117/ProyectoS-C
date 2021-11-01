@extends("layout.layout")
@section("titulo", "Registrar producto")
@section("contenido")

     <br>
    <form action="{{url('/productos')}}" method="post">
    @csrf 
        <div class="mb-3">
            <label for="NombreProducto" class="form-label">Nombre Del Producto</label>
            <input type="text" class="From-Control" id="NombreProducto" >
        </div>   
        <div class="mb-3">
            <label for="PrecioProducto" class="form-label">Precio Del Producto</label>
            <input type="text" class="From-Control" id="PrecioProducto" >
        </div>
        <br>
        <div class="mb-3">
            <label for="DescripcionProducto" class="form-label">Descripcion Del Producto</label>
            <input type="text" class="from-control" id="DescripcionProducto" >
        </div>        
        <br>
        <input type="submit" value="guardar">
    </form>
    
    <p>hola texto prueba css</p>
@endsection


