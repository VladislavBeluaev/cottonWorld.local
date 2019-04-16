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

Route::group(['namespace'=>'User',],function(){
    Route::group(['prefix'=>'men'],function (){
        Route::get('t-shirts','DashboardController@menTShirts')->name('user.menTShirts');
    });
    Route::get('/','DashboardController@index')->name('user.index');
});
