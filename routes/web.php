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

Route::group(['prefix' => 'marca'], function(){

    Route::get('crear',  function(){
        return view('marcas.crear');
    });
    Route::post('crear', 'MarcasController@createPost');
    Route::get('editar/{cpk_marca}',  'MarcasController@editGet');
    Route::post('editar/{cpk_marca}', 'MarcasController@editPost');
    Route::get('eliminar/{cpk_marca}', 'MarcasController@deleteGet');
    Route::get('listar', 'MarcasController@listar');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
