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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'TaxController@index');
Route::get('get', 'TaxController@get');
Route::get('get100', 'TaxController@get100');


// 向es增加数据
Route::get('store', 'EsController@store');
Route::get('get/{id}', 'EsController@get');
Route::get('indices', 'EsController@indices');