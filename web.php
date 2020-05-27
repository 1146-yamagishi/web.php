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
    return view('welcome');
});

Route::group(['plefix' => 'admin'],function(){
    Route::get('new/create','Admin\NewController@add');
});
Route::get('XXX/AAA/BBB','XXX\AAAController@BBB');
Route::group(['plefix' => 'admin'],function(){
    Route::get('Plofile/create','Admin\PlofileController@add');
    Route::get('Plofile/edit','Admin\PlofileController@edit');
});