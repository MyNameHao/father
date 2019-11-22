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

Route::prefix('index/')->group(function(){
    Route::any('index/','Admin\IndexController@index');
});

Route::get('/admin', function () {
    echo 111;
});

/*客户信息管理*/
Route::prefix('customers/')->group(function(){
    Route::any('create/','Admin\CustomersController@create');//添加视图
});
