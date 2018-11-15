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

Route::get('/', function () {
    return view('login');
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/formulario', function(){
    return view('formulario');
});

Route::get('/formulario2', function(){
    return view('formulario2');
});

Route::get('/tabla', function(){
    return view('tabla');
});

Route::get('/tabla2', function(){
    return view('tabla2');
});

Route::get('/grafica', function(){
    return view('grafica');
});

Route::get('/grafica2', function(){
    return view('grafica2');
});