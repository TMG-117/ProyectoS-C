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
       $productos = Producto::paginate(2);
        return view('productos.index',['productos' => $productos]);

	    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
      $proveedores = DB::table('proveedores')
            ->select('PREVEEDOR_ID','NOMBRE_PROVEEDOR')
            ->get() ;

      $clientes = DB::table('clientes')
            ->select('CLIENTE_ID','NOMBRECLIENTE')
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
        "PREVEEDOR_ID"    => 'required',
        "CLIENTE_ID"      => 'required',
        "VENDEDOR_ID"     => 'required',
        "NOMBREPRODUCTO"  => 'required|unique:productos',
        "PRECIOVENTA"     => 'required|numeric' ,
        "PRECIOCOMPRA"    => 'required|numeric' ,
        "STOCKMINIMO"     => 'required|numeric' ,
        "FICHATECNICA"    => 'required|unique:productos'
        ]);
        //dd($request);exit();
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
        
        $respuesta = $producto->save();
        if($respuesta){
            return redirect('/productos')->with('success', 'Nuevo producto registrado con éxito');
        }else{
            return redirect('/productos/create')->with('warning', 'Ocurrio un error');
        }
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
      //return($producto);
    $proveedores = DB::table('proveedores')
            ->select('PREVEEDOR_ID','NOMBRE_PROVEEDOR')
            ->get() ;

    $clientes = DB::table('clientes')
            ->select('CLIENTE_ID','NOMBRECLIENTE')
            ->get() ;
                  
    $vendedores = DB::table('vendedores')
            ->select('VENDEDOR_ID','NOMBREVENDEDOR')
            ->get(); 
            
           
    $producto = DB::table('productos')
    ->select('PRODUCTO_ID','NOMBREPRODUCTO','PRECIOVENTA','PRECIOCOMPRA','STOCKMINIMO','FICHATECNICA')
    ->where('PRODUCTO_ID', $id)->first();

        return view ('productos.edit',['clientes'=>$clientes, 'proveedores'=>$proveedores,'vendedores'=>$vendedores,'producto'=>$producto]);
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
       $request->validate([
        "PREVEEDOR_ID"    => 'required',
        "CLIENTE_ID"      => 'required',
        "VENDEDOR_ID"     => 'required',
        "NOMBREPRODUCTO"  => 'required',
        "PRECIOVENTA"     => 'required|numeric' ,
        "PRECIOCOMPRA"    => 'required|numeric' ,
        "STOCKMINIMO"     => 'required|numeric' ,
        "FICHATECNICA"    => 'required'
        ]);
       // dd($request);exit();
       
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
        //dd($producto);exit();
        $respuesta = Producto::where('PRODUCTO_ID', $id)
                            ->update(                                
                                [
                                 'PREVEEDOR_ID'    => $producto->PREVEEDOR_ID,
                                 'CLIENTE_ID'      => $producto->CLIENTE_ID,
                                 'VENDEDOR_ID'     => $producto->VENDEDOR_ID,
                                 'NOMBREPRODUCTO'  => $producto->NOMBREPRODUCTO,
                                 'PRECIOVENTA'     => $producto->PRECIOVENTA,
                                 'PRECIOCOMPRA'    => $producto->PRECIOCOMPRA,
                                 'STOCKMINIMO'     => $producto->STOCKMINIMO,
                                 'FICHATECNICA'    =>$producto->FICHATECNICA
                            ]);
        if($respuesta){
            return redirect('/productos?page='.$request->pagina)->with('success', 'Producto actualizado con éxito');
            
            return redirect('/orm/index?page='.$request->pagina)->with('mensaje','El registro ha sido modificado exitosamente'); 
        }else{
            return redirect('/productos')->with('warning', 'Ocurrio un error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $respuesta = DB::table('productos')->where('PRODUCTO_ID', '=', $id)->delete();
        if($respuesta){
            return redirect('/productos')->with('success', 'Producto eliminado');
        }else{
            return redirect('/productos')->with('warning', 'No se pudo eliminar este producto');
        }
    }
}

