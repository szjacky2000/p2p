<?php
//后台管理
Route::prefix('personcenter')->group(function () {
   Route::get('/', 'PersonalcenterController@index');
   Route::post('/bank/add', 'PersonalcenterController@bank_add');
});


//personcenter//bank/add