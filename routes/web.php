<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);

Route::get('/',function(){
	return view ('welcome');
});

