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

Route::get('/','Admin\ServerController@index');

//客户服务管理
Route::prefix('server')->group(function(){
    Route::any('/create','admin\ServerController@create');//添加页面
    Route::any('/save','admin\ServerController@save');//添加方法

});

Route::prefix('index/')->group(function(){
    Route::any('index/','Admin\IndexController@index');
});

Route::get('/admin', function () {
    echo 111;
});

