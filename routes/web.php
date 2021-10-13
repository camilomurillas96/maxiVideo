<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('alquiler', function () {
    return view('alquiler');
})->name('alquiler');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');


// Formulario

Route::post('create/client', 'ClienteController@create')->name('createClient');

//EMAIL

Route::post('envEmail', function(){
    return request()->all();
})->name('envEmail');