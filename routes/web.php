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

Route::any('admin', 'Admin\LoginController@Login');
Route::any('code', 'Admin\LoginController@Code');
Route::any('index','Admin\IndexController@index');
Route::resource('list','Admin\ListController');
Route::resource('cate','Admin\CateController');
Route::any('admin/ps','Admin\PsController@index');
Route::any('pass','Admin\NewpassController@index');
Route::any('cs','Admin\LoginController@cs');
Route::resource('nav','Admin\NavController');
Route::resource('config','Admin\ConfigController');


