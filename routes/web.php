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
    $name = "Goran";
    $age = "24";
    return view('welcome', compact('name','age'));
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/cars', 'CarsController@index');

Route::get('/cars/{id}', 'CarsController@show');