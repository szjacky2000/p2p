<?php
//register & login
Route::any('sms','SmsController@send'); //验证短信
Route::get('register_1','Auth\RegisterController@reg_1')->name('reg_1');

Route::post('register_2','Auth\RegisterController@reg_2')->name('reg_2');
Route::get('register_2','Auth\RegisterController@reg_2')->name('reg_2');

Route::get('register_3','Auth\RegisterController@reg_3')->name('reg_3');
Route::post('register_3','Auth\RegisterController@reg_3')->name('reg_3');

Route::get('success_register','Auth\RegisterController@success_register')->name('success_register');
Route::post('success_register','Auth\RegisterController@success_register')->name('success_register');



Route::get('personcenter','HomeController@personcenter');



Route::get('reg_enterprise','Auth\RegisterController@reg_4')->name('reg_enterprise');



Route::get('exit','Auth\LoginController@logout')->name('exit');

Route::get('userinfo','Auth\RegisterController@userinfo');