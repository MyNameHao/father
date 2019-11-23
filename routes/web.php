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

Route::prefix('index/')->group(function(){
    Route::any('index/','Admin\IndexController@index');
});


