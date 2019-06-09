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

/*Route::get('/', function () {
    return view('/auth/login');
});*/

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    /** abertura da home */
    Route::get('/', 'HomeController@index')->name('home');

    /** telas de laudoFurtoQualificado */
    Route::get('/laudoFurtoQualificado', 'LaudoFurtoQualificadoController@index')
        ->name('laudoFurtoQualificado.index');
    Route::get('/laudoFurtoQualificado/create', 'LaudoFurtoQualificadoController@create')
        ->name('laudoFurtoQualificado.create');
    Route::post('/laudoFurtoQualificado/store', 'LaudoFurtoQualificadoController@store')
        ->name('laudoFurtoQualificado.store');
    Route::get('/laudoFurtoQualificado/{id}/edit', 'LaudoFurtoQualificadoController@edit')
        ->name('laudoFurtoQualificado.edit');
    Route::put('/laudoFurtoQualificado/{id}', 'LaudoFurtoQualificadoController@update')
        ->name('laudoFurtoQualificado.update');
    Route::get('/laudoFurtoQualificado/{id}/geradorpdf', 'LaudoFurtoQualificadoController@geradorpdf')
        ->name('laudoFurtoQualificado.geradorpdf');
});
