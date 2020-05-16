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
    return view('vendedores.crear');
});

//Route::get('/marca',function () {
//    return view('layouts.base');
//});

Route::group(['prefix' => 'vendedor'], function(){
    
    Route::get('crear',  function(){
        return view('vendedores.crear');
    });
    Route::post('crear', 'VendedoresController@createPost');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
