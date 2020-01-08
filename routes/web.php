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

// use App\super_admin\website\Banner;
// use App\super_admin\website\Business;
// use App\super_admin\website\Innovation;
// use App\super_admin\website\Uniquevenue;
// use App\super_admin\website\City;
// use App\super_admin\website\Globalm;
// Route::domain('{website}.hoteleventcrm.buzz')->group(function () {
//     Route::get('/' , function(){
// 		return view('tenant.index');
//  	});
//  	Route::get('tem' , function(){
//  		return 'tem';
//  	});
//  });
//['middleware'=>['lookfortenant'] , 

Route::group(['domain'=>'hoteleventcrm.buzz'] , function(){  
// Route::get('/', function () {return view('index');});
Route::get('/', function () {
	// $data['banner'] = Banner::paginate(1);
	// $data['innovation'] = Innovation::paginate(3);
	// $data['globalm'] = Globalm::paginate(1);
	// $data['business'] = Business::paginate(1);
	// $data['uniquevenue'] = Uniquevenue::paginate(6);
	// $data['city'] = City::paginate(6);
	// return view('index',compact('data'));
	// return view('index')->with('data', $data);
	// return view('index')->with(array('data'=> $data));
	return view('main-system.index');
})->name('welcome');

// Route::domain('{website}.hoteleventcrm.buzz')->group(function () {
//     Route::get('/', function ($account, $id) {
//         return "subdoman";
//     });
// });

//Auth::routes();

Route::get('super/login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('super/login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@login'
]);
Route::post('super/logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);

Route::get('/plateform' , function(){
	return view('main-system.plateform');
})->name('plateform');

Route::get('/solutions' , function(){
	return view('main-system.solutions');
})->name('solutions');

Route::group(['middleware'=>['auth'] , 'prefix'=>'super'] , function(){

	Route::get('/', 'HomeController@index')->name('home');
	// website route
	Route::get('/banner-list', 'super_admin\website\BannerController@index')->name('bannerList'); 
	Route::get('/add-banner', 'super_admin\website\BannerController@create')->name('bannerAdd');
	Route::get('/edit-banner/{id}', 'super_admin\website\BannerController@edit')->name('bannerEdit');
	Route::post('/update-banner/{id}', 'super_admin\website\BannerController@update')->name('bannerUpdate');
	Route::get('/delete-banner/{id}', 'super_admin\website\BannerController@destroy')->name('bannerDelete');
	Route::post('/banner-store','super_admin\website\BannerController@store')->name('bannerStore');


	Route::get('/innovation-list', 'super_admin\website\InnovationController@index')->name('innovationList');
	Route::get('/add-innovation', 'super_admin\website\InnovationController@create')->name('innovationAdd');
	Route::get('/edit-innovation/{id}', 'super_admin\website\InnovationController@edit')->name('innovationEdit');
	Route::post('/update-innovation/{id}', 'super_admin\website\InnovationController@update')->name('innovationUpdate');
	Route::get('/delete-innovation/{id}', 'super_admin\website\InnovationController@destroy')->name('innovationDelete');
	Route::post('/innovation-store','super_admin\website\InnovationController@store')->name('innovationStore');


	Route::get('/globalm-list', 'super_admin\website\GlobalmController@index')->name('globalmList');
	Route::get('/add-globalm', 'super_admin\website\GlobalmController@create')->name('globalmAdd');
	Route::get('/edit-globalm/{id}', 'super_admin\website\GlobalmController@edit')->name('globalmEdit');
	Route::post('/update-globalm/{id}', 'super_admin\website\GlobalmController@update')->name('globalmUpdate');
	Route::get('/delete-globalm/{id}', 'super_admin\website\GlobalmController@destroy')->name('globalmDelete');
	Route::post('/globalm-store','super_admin\website\GlobalmController@store')->name('globalmStore');


	Route::get('/business-list', 'super_admin\website\BusinessController@index')->name('businessList');
	Route::get('/add-business', 'super_admin\website\BusinessController@create')->name('businessAdd');
	Route::get('/edit-business/{id}', 'super_admin\website\BusinessController@edit')->name('businessEdit');
	Route::post('/update-business/{id}', 'super_admin\website\BusinessController@update')->name('businessUpdate');
	Route::get('/delete-business/{id}', 'super_admin\website\BusinessController@destroy')->name('businessDelete');
	Route::post('/business-store','super_admin\website\BusinessController@store')->name('businessStore');


	Route::get('/uniquevenue-list', 'super_admin\website\UniquevenueController@index')->name('uniquevenueList');
	Route::get('/add-uniquevenue', 'super_admin\website\UniquevenueController@create')->name('uniquevenueAdd');
	Route::get('/edit-uniquevenue/{id}', 'super_admin\website\UniquevenueController@edit')->name('uniquevenueEdit');
	Route::post('/update-uniquevenue/{id}', 'super_admin\website\UniquevenueController@update')->name('uniquevenueUpdate');
	Route::get('/delete-uniquevenue/{id}', 'super_admin\website\UniquevenueController@destroy')->name('uniquevenueDelete');
	Route::post('/uniquevenue-store','super_admin\website\UniquevenueController@store')->name('uniquevenueStore');


	Route::get('/city-list', 'super_admin\website\CityController@index')->name('cityList');
	Route::get('/add-city', 'super_admin\website\CityController@create')->name('cityAdd');
	Route::get('/edit-city/{id}', 'super_admin\website\CityController@edit')->name('cityEdit');
	Route::post('/update-city/{id}', 'super_admin\website\CityController@update')->name('cityUpdate');
	Route::get('/delete-city/{id}', 'super_admin\website\CityController@destroy')->name('cityDelete');
	Route::post('/city-store','super_admin\website\CityController@store')->name('cityStore');


	Route::get('/businessowner-list', 'super_admin\BusinessownerController@index')->name('businessownerList');
	Route::get('/add-businessowner', 'super_admin\BusinessownerController@create')->name('businessownerAdd');
	Route::get('/edit-businessowner/{id}', 'super_admin\BusinessownerController@edit')->name('businessownerEdit');
	Route::post('/update-businessowner/{id}', 'super_admin\BusinessownerController@update')->name('businessownerUpdate');
	Route::get('/update-status-businessowner/{id}', 'super_admin\BusinessownerController@destroy')->name('businessownerUpdateStatus');
	Route::post('/businessowner-store','super_admin\BusinessownerController@store')->name('businessownerStore');
	});

});


