<?php
Route::group(['middleware'=>'lookfortenant'] , function(){ 
	Route::get('/' , function(){
		return view('tenant.index');
 	});
 });
