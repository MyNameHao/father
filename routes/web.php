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
    Route::any('areas/','Admin\CustomersController@areas');//三级联动
    Route::any('store/','Admin\CustomersController@store');//执行添加
    Route::any('index/','Admin\CustomersController@index');//列表展示
    Route::any('delete/{id}','Admin\CustomersController@delete');//列表展示
    Route::any('edit/{id}','Admin\CustomersController@edit');//列表展示
    Route::any('update/{id}','Admin\CustomersController@update');//列表展示
});
