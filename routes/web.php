<?php

use Illuminate\Support\Facades\Route;


route::get('/' , function (){
	return view('layout');
})->name('home');


