<?php
//后台管理
Route::get('backstage/login','Backstage\LoginController@index');

Route::prefix('backstage')->middleware(['backstage.login'])->group(function () {
    Route::get('test', 'Backstage\LoginController@test');
    Route::get('collateral-add', 'Bid\CollateralController@add');
});
