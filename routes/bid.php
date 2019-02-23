<?php
//标的中由内容
Route::get('collateral' , 'Bid\CollateralController@show');
Route::any('collateral/add'   , 'Bid\CollateralController@add');
Route::any('collateral/update', 'Bid\CollateralController@update');
Route::any('collateral/remove', 'Bid\CollateralController@remove');
Route::any('collateral/getCollaterals', 'Bid\CollateralController@getCollaterals');
Route::any('collateral/delCollateral', 'Bid\CollateralController@delCollateral');
Route::any('collateral/setCollaterals', 'Bid\CollateralController@setCollaterals');
Route::any('collateral/addConllaterals', 'Bid\CollateralController@addConllaterals');

Route::get('loan' , 'Bid\LoanController@index');
Route::post('loan/add' , 'Bid\LoanController@add');


//业务审核
Route::any('loan/list' , 'Bid\LoanController@list');
Route::get('loan/show' , 'Bid\LoanController@show');
Route::post('loan/investigate/{id}' , 'Bid\LoanController@investigate');















