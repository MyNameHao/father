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

 //登陆
Route::view('/admin/login','admin.login');

//登陆
Route::get('/admin/logindo','Admin\IndexController@logindo');



//首页
Route::prefix('/index')->middleware('login')->group(function(){
    Route::any('/index','Admin\IndexController@index');

});


