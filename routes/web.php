<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\ProductoController;



/*Route::get('/',function(){
	return view ('welcome');
});*/





Route::resource('productos', ProductoController::class);
Route::get('productos/edit',[ProductoController::class, 'edit']);
Route::get('productos/create',[ProductoController::class, 'create']);


