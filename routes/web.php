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
<<<<<<< HEAD
Route::prefix('index/')->group(function(){
    Route::any('index/','Admin\IndexController@index');
});
=======
Route::get('/admin', function () {
    echo 111;
});
>>>>>>> 961f051aeb7235e53e8a8518822333edc05e9b84
