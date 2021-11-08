<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\ProductoController;



/*Route::get('/',function(){
	return view ('welcome');
});*/

Route::get('/productos',function(){
	return view ('productos.index');
});
Route::get('/productos/edit',function(){
return view('productos.edit');
});
Route::post('productos',[ProductoController::class,'store'])->name('productos.store');



Route::resource('productos', ProductoController::class);
	

route::get('/productos/destroy',[ProductoController::class,'destroy']);