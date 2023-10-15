<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;


Route::get('/',HomeController::class);//no corchetes porque solo hay 1 metodo

//Grupo de rutas -> producto
Route::controller(ProductoController::class)->group(function(){
    Route::get('productos','index')->name('productos.index');
    Route::get('productos/create','create')->name('productos.create');
    Route::get('productos/{producto}','show')->name('productos.show');
    Route::post('productos','store')->name('productos.store');
    Route::get('productos/{producto}/edit','edit')->name('productos.edit');
    Route::put('productos/{producto}','update')->name('productos.update');
    Route::delete('productos/{producto}','destroy')->name('productos.destroy');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
