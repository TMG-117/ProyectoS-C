<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $productos = Producto::paginate(5);
        return view('productos.index',['productos' => $productos]);

	    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        "nombre"          => 'required|unique:productos',
        "precio_venta"    => 'required|numeric' ,
        "precio_compra"   => 'required|numeric' ,
        "stock_minimo"    => 'required|numeric' ,
        "FichaTecnica"    => 'required|unique:FICHATECNICA'
        ]);
        db($request);exit();
        $producto = new Producto();
        $producto->PRODUCTO_ID    =null;
        $producto->NOMBREPRODUCTO =$request->nombre;
        $producto->PRECIOVENTA    =$request->precio_venta;
        $producto->PRECIOCOMPRA   =$request->precio_compra;
        $producto->STOCKMINIMO    =$request->stock_minimo;
        $producto->FICHATECNICA   =$request->FichaTecnica;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return view ("productos.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view ("edit",["producto"=>$producto]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view ('destroy',$id);
    }
}
