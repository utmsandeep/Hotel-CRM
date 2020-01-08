<?php

use App\Http\Controllers\Tenant\ConsumerController;

Route::group(['middleware'=>'lookfortenant'] , function(){ 
	Route::get('/' , function(){
		return view('tenant.index');
 	});

 	Route::post('/login', [ConsumerController::class, 'Login'])->name('tenant.login.submit');
 	Route::get('/register', [ConsumerController::class, 'RegisterForm'])->name('tenant.register');
 	Route::post('/register', [ConsumerController::class, 'Store'])->name('tenant.register.submit');
 });
