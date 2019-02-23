<?php
Route::get('/','HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

//about and sub module
Route::prefix('about')->group(function () {
    Route::get('profile', 'AboutController@profile');
});

//register&login
Auth::routes();
include('auth.php');

//后台管理
include('backstage.php');

//发标路由
include('bid.php');

