@extends("layout.layout")
@section("titulo", "Registrar producto")
@section("contenido")
    <form action="{{url('/productos')}}" method="post">
    @csrf    
        <label for"NombreProducto">Nombre del producto</label>
        <input type="text" name="NombreProducto" id="NombreProducto">
        <br>

        <label for"PrecioProducto">precio del producto</label>
        <input type="text" name="PrecioProducto"id="PrecioProducto">
        <br>

        <label for"DescripcionProducto">descripcion del producto</label>
        <input type="text"name="DescrpcionProducto" id="DescrpcionProducto">
        <br>

        <input type="submit" value="guardar">
    </form>
@endsection
P