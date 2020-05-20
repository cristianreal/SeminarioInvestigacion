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
    Route::get('editar/{cpk_vendedor}',  'VendedoresController@editGet');
    Route::post('editar/{cpk_vendedor}', 'VendedoresController@editPost');
    Route::get('eliminar/{cpk_vendedor}', 'VendedoresController@deleteGet');
    Route::get('listar', 'VendedoresController@listar');

});

Route::group(['prefix' => 'proveedor'], function(){
    
    Route::get('crear',  function(){
        return view('proveedor.crear');
    });
    Route::post('crear', 'ProveedoresController@createPost');
    Route::get('editar/{cpk_proveedor}',  'ProveedoresController@editGet');
    Route::post('editar/{cpk_proveedor}', 'ProveedoresController@editPost');
    Route::get('eliminar/{cpk_proveedor}', 'ProveedoresController@deleteGet');
    Route::get('listar', 'ProveedoresController@listar');
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
