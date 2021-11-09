<?php

namespace App\Http\Controllers;
use DB;
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
      
      $clientes = DB::table('clientes')
            ->select('CLIENTE_ID','NOMBRECLIENTE')
            ->get() ;
        
      $proveedores = DB::table('proveedores')
            ->select('PREVEEDOR_ID','NOMBRE_PROVEEDOR')
            ->get() ;
            
      $vendedores = DB::table('vendedores')
            ->select('VENDEDOR_ID','NOMBREVENDEDOR')
            ->get(); 
           
        return view ('productos.create',['clientes'=>$clientes, 'proveedores'=>$proveedores,'vendedores'=>$vendedores]);
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
        "PREVEEDOR_ID"    => 'required|unique:productos',
        "CLIENTE_ID"      => 'required|unique:productos',
        "VENDEDOR_ID"     => 'required|unique:productos',
        "nombre"          => 'required|unique:productos',
        "precio_venta"    => 'required|numeric' ,
        "precio_compra"   => 'required|numeric' ,
        "stock_minimo"    => 'required|numeric' ,
        "FichaTecnica"    => 'required|unique:FICHATECNICA'
        ]);
        db($request);exit();
        $producto = new Producto();
        $producto->PRODUCTO_ID    =null;
        $producto->PREVEEDOR_ID   =$request->PREVEEDOR_ID;
        $producto->CLIENTE_ID     =$request->CLIENTE_ID;
        $producto->VENDEDOR_ID    =$request->VENDEDOR_ID;
        $producto->NOMBREPRODUCTO =$request->NOMBREPRODUCTO;
        $producto->PRECIOVENTA    =$request->PRECIOVENTA;
        $producto->PRECIOCOMPRA   =$request->PRECIOCOMPRA;
        $producto->STOCKMINIMO    =$request->STOCKMINIMO;
        $producto->FICHATECNICA   =$request->FICHATECNICA;
        
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
    public function edit($id)
    {
        $producto = Producto::where('PREVEEDOR_ID', $id)->first();
        $proveedores = DB::table('provedores')
            ->select('PREVEEDOR_ID', 'NOMBRE_PROVEEDOR')
            ->orderBy('NOMBRE_PROVEEDOR')
            ->get();

            
        $clientes = DB::table('clientes')
            ->select('CLIENTE_ID', 'NOMBRECLIENTE')
            ->orderBy('NOMBRECLIENTE')
            ->get();

            
        $vendedores = DB::table('vendedores')
            ->select('categoria_id', 'nombre')
            ->orderBy('nombre')
            ->get();

		return view ("productos.edit",["producto"=>$producto,'proveedores'=>$proveedores,'clientes'=>$clientes,'vendedores'=>$vendedores]);
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

     return 'Destroy '.$id;
    }
}

