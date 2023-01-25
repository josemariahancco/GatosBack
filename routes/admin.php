<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\GatoController;




Route::get('/',[HomeController::class,('index')]);
//Rutas gatos 
Route::resource('gatos', GatoController::class);
