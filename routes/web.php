<?php

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

//
//Route::get('/', function () {
//    return view('welcome');
//});
//

//Login:
Route::get('/', function () {return view('user/login');});

//create user
Route::get('create_user', function () { return view('user/create_user');});

//productos
Route::get('listado_productos', function () { return view('productos/listado');});

