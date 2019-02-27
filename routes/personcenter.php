<?php
//后台管理
Route::prefix('personcenter')->group(function () {
   Route::get('/', 'PersonalcenterController@index');
});
