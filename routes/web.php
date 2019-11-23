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

//联系人
Route::prefix('link')->group(function(){
    Route::any('index','Admin\LinkmanController@index');//联系人添加页面
    Route::post('save','Admin\LinkmanController@save');//添加执行t
    Route::any('list','Admin\LinkmanController@list');//列表展示
    Route::any('edit/{id}','Admin\LinkmanController@edit');//修改展示页面
    Route::any('update/{id}','Admin\LinkmanController@update');//修改执行
    Route::any('delete/{id}','Admin\LinkmanController@delete');//删除执行
});

