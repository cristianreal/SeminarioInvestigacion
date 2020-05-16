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
    return view('welcome');
});

Route::get('/marca',function () {
    return view('layouts.base');
});

Route::group(['prefix' => 'vendedores'], function(){
    
    Route::get('crear',  function(){
        return view('vendedores.crear');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
