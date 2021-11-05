<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\ProductoController;



/*Route::get('/',function(){
	return view ('welcome');
});*/

Route::get('/productos',function(){
	return view ('productos.index');
});

Route::get('/productos/create',[ProductoController::class,'create']);

Route::resource('productos', ProductoController::class);
	
Route::get('/productos/edit',[ProductoController::class,'edit']);
route::get('/productos/destroy',[ProductoController::class,'destroy']);