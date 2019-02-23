<?php
//标的中由内容
Route::get('Backstage/list' , 'Backstage\DepartmentController@list');
Route::any('Backstage/add' , 'Backstage\DepartmentController@add');
Route::any('Backstage/del' , 'Backstage\DepartmentController@del');
Route::any('Backstage/edit' , 'Backstage\DepartmentController@edit');