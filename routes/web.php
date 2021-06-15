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
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

// // PASAR INFORMACION A LA VISTA
// Route::get('/home',function(){
//     $hello = 'PASANDO INFO A LA VISTA';
//     return view('home',['hello' => $hello]);
// });

// //CONTROLADORES nombreControlador@metodo
// Route::get('/lenguajes','LenguajesController@index');