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


//客户服务管理
Route::prefix('server')->group(function(){
    Route::any('/create','admin\ServerController@create');//添加页面
    Route::any('/save','admin\ServerController@save');//添加方法
    Route::any('/index','admin\ServerController@index');//展示页面
    Route::any('/del/{id}','admin\ServerController@del');//删除方法
    Route::any('/upd/{id}','admin\ServerController@upd');//修改页面
    Route::any('/upd_do/{id}','admin\ServerController@upd_do');//修改方法

});

 //登陆
Route::view('/admin/login','login.login');

//登陆
Route::post('/admin/logindo','Admin\IndexController@logindo');



//首页
Route::prefix('/index')->middleware('login')->group(function(){
    Route::any('/index','Admin\IndexController@index');

<<<<<<< HEAD
=======
});
>>>>>>> cad1153cd6d9246b75d8e60e4e64194d27a058a9

Route::prefix('customers/')->middleware('login')->group(function(){
    Route::any('create/','Admin\CustomersController@create');//添加视图
    Route::any('areas/','Admin\CustomersController@areas');//三级联动
    Route::any('store/','Admin\CustomersController@store');//执行添加
    Route::any('index/','Admin\CustomersController@index');//列表展示
    Route::any('delete/{id}','Admin\CustomersController@delete');//列表展示
    Route::any('edit/{id}','Admin\CustomersController@edit');//列表展示
    Route::any('update/{id}','Admin\CustomersController@update');//列表展示
});
