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
    return view(['welcome']);
    // indico que no va a contar con la opción de registro
});

 
 Auth::routes(['register'=>false]);
 
 Route::get('/home', 'HomeController@index')->name('home');
