<?php

use App\Http\Controllers\Tenant\ConsumerController;
use App\Http\Controllers\Tenant\Admin\AdminController;
use App\Http\Controllers\Tenant\Admin\HomeController;
use App\Http\Controllers\Tenant\Admin\StaffController;
use App\Http\Controllers\Tenant\Admin\RoleController;
use App\Http\Controllers\Tenant\Admin\HotelController;
use App\Http\Controllers\Tenant\Admin\HotelSettingController;
use App\Http\Controllers\Tenant\Admin\ContractController;
use App\Http\Controllers\Tenant\Admin\PerposalController;

Route::group(['middleware'=>['web' , 'lookfortenant']] , function(){ 
	Route::get('/' , function(){
		return view('tenant.index');
 	})->name('tenant.index');

 	Route::get("/search/hotels" , function(){
 		return view('tenant.search-hotels');
 	});
 	Route::get("/show/hotel" , function(){
 		return view('tenant.show-hotel');
 	});
 	Route::get("/hotel/query-form" , function(){
 		return view('tenant.query-form');
 	});
	Route::group(['prefix'=>'consumer'] , function(){ 
	 	Route::post('/login', [ConsumerController::class, 'Login'])->name('tenant.login.submit');
	 	Route::post('/logout', [HomeController::class, 'ConsumerLogOut'])->name('tenant.logout.submit');
	 	Route::get('/register', [ConsumerController::class, 'RegisterForm'])->name('tenant.register');
	 	Route::post('/register', [ConsumerController::class, 'Store'])->name('tenant.register.submit');
	 	
		Route::group(['middleware'=>['auth:consumer']] , function(){ 
			Route::get('/' , function(){
			 return redirect()->route('tenant.index');
	 		})->name('tenant.consumer.home');
		});
	});

	Route::group(['prefix'=>'admin'] , function(){ 
		Route::get('/login', [AdminController::class, 'LoginForm'])->name('tenant.admin.login');
		Route::post('/login', [AdminController::class, 'Login'])->name('tenant.admin.login.submit');
		Route::get('/password/reset/{token}', [AdminController::class, 'passwordResetForm'])->name('tenant.admin.password.reset');
		Route::post('/password/reset/{token}', [AdminController::class, 'passwordResetStore'])->name('tenant.admin.password.reset.store');
		

		 //Route::get('/', function () { return redirect('dashboard/index'); });

/* Dashboard */


/* Profile */
Route::get('profile', function () { return redirect('profile/my-profile'); });
Route::get('profile/my-profile', function () { return view('tenant.admin.profile.my-profile');})->name('profile.my-profile');

/* App */
Route::get('app', function () { return redirect('app/inbox'); });
Route::get('app/inbox', function () {  return view('tenant.admin.app.inbox');})->name('app.inbox');
Route::get('app/compose', 'AppController@compose')->name('app.compose');
Route::get('app/single', 'AppController@single')->name('app.single');
Route::get('app/chat', 'AppController@chat')->name('app.chat');
Route::get('app/calendar', 'AppController@calendar')->name('app.calendar');
Route::get('app/contact-list', 'AppController@contactList')->name('app.contact-list');

/* Project */
Route::get('project', function () { return redirect('project/project-list'); });
Route::get('project/project-list', 'ProjectController@projectList')->name('project.project-list');
Route::get('project/taskboard', 'ProjectController@taskboard')->name('project.taskboard');
Route::get('project/ticket-list', 'ProjectController@ticketList')->name('project.ticket-list');
Route::get('project/ticket-detail', 'ProjectController@ticketDetail')->name('project.ticket-detail');

/* File Manager */
Route::get('file-manager', function () { return redirect('file-manager/all'); });
Route::get('file-manager/all', 'FileManagerController@all')->name('file-manager.all');
Route::get('file-manager/documents', 'FileManagerController@documents')->name('file-manager.documents');
Route::get('file-manager/media', 'FileManagerController@media')->name('file-manager.media');
Route::get('file-manager/image', 'FileManagerController@image')->name('file-manager.image');

/* Blog */
Route::get('blog', function () { return redirect('blog/dashboard'); });
Route::get('blog/dashboard', 'BlogController@dashboard')->name('blog.dashboard');
Route::get('blog/new-post', 'BlogController@newPost')->name('blog.new-post');
Route::get('blog/list', 'BlogController@list')->name('blog.list');
Route::get('blog/grid', 'BlogController@grid')->name('blog.grid');
Route::get('blog/detail', 'BlogController@detail')->name('blog.detail');

/* Ecommerce */
Route::get('ecommerce', function () { return redirect('ecommerce/dashboard'); });
Route::get('ecommerce/dashboard', 'EcommerceController@dashboard')->name('ecommerce.dashboard');
Route::get('ecommerce/product', 'EcommerceController@product')->name('ecommerce.product');
Route::get('ecommerce/product-list', 'EcommerceController@productList')->name('ecommerce.product-list');
Route::get('ecommerce/product-detail', 'EcommerceController@productDetail')->name('ecommerce.product-detail');

/* components */
Route::get('components', function () { return redirect('components/ui'); });
Route::get('components/ui', 'ComponentsController@ui')->name('components.ui');
Route::get('components/alerts', 'ComponentsController@alerts')->name('components.alerts');
Route::get('components/collapse', 'ComponentsController@collapse')->name('components.collapse');
Route::get('components/colors', 'ComponentsController@colors')->name('components.colors');
Route::get('components/dialogs', 'ComponentsController@dialogs')->name('components.dialogs');
Route::get('components/list', 'ComponentsController@list')->name('components.list');
Route::get('components/media', 'ComponentsController@media')->name('components.media');
Route::get('components/modals', 'ComponentsController@modals')->name('components.modals');
Route::get('components/notifications', 'ComponentsController@notifications')->name('components.notifications');
Route::get('components/progressbars', 'ComponentsController@progressbars')->name('components.progressbars');
Route::get('components/range', 'ComponentsController@range')->name('components.range');
Route::get('components/sortable', 'ComponentsController@sortable')->name('components.sortable');
Route::get('components/tabs', 'ComponentsController@tabs')->name('components.tabs');
Route::get('components/waves', 'ComponentsController@waves')->name('components.waves');

/* Font Icons */
Route::get('icons', function () { return redirect('icons/material'); });
Route::get('icons/material', 'IconsController@material')->name('icons.material');
Route::get('icons/themify', 'IconsController@themify')->name('icons.themify');
Route::get('icons/weather', 'IconsController@weather')->name('icons.weather');

/* Form */
Route::get('form', function () { return redirect('form/basic'); });
Route::get('form/basic', 'FormController@basic')->name('form.basic');
Route::get('form/advanced', 'FormController@advanced')->name('form.advanced');
Route::get('form/examples', 'FormController@examples')->name('form.examples');
Route::get('form/validation', 'FormController@validation')->name('form.validation');
Route::get('form/wizard', 'FormController@wizard')->name('form.wizard');
Route::get('form/editors', 'FormController@editors')->name('form.editors');
Route::get('form/upload', 'FormController@upload')->name('form.upload');
Route::get('form/summernote', 'FormController@summernote')->name('form.summernote');

/* Tables */
Route::get('tables', function () { return redirect('tables/normal'); });
Route::get('tables/normal', 'TablesController@normal')->name('tables.normal');
Route::get('tables/datatable', 'TablesController@datatable')->name('tables.datatable');
Route::get('tables/editable', 'TablesController@editable')->name('tables.editable');
Route::get('tables/footable', 'TablesController@footable')->name('tables.footable');
Route::get('tables/color', 'TablesController@color')->name('tables.color');

/* Chart */
Route::get('chart', function () { return redirect('chart/echarts'); });
Route::get('chart/echarts', 'ChartController@echarts')->name('chart.echarts');
Route::get('chart/c3', 'ChartController@c3')->name('chart.c3');
Route::get('chart/morris', 'ChartController@morris')->name('chart.morris');
Route::get('chart/flot', 'ChartController@flot')->name('chart.flot');
Route::get('chart/chartjs', 'ChartController@chartjs')->name('chart.chartjs');
Route::get('chart/sparkline', 'ChartController@sparkline')->name('chart.sparkline');
Route::get('chart/knob', 'ChartController@knob')->name('chart.knob');

/* Widgets */
Route::get('widgets', function () { return redirect('widgets/app'); });
Route::get('widgets/app', 'WidgetsController@app')->name('widgets.app');
Route::get('widgets/data', 'WidgetsController@data')->name('widgets.data');

/* Authentication */
Route::get('authentication', function () { return redirect('authentication/login'); });
Route::get('authentication/login', 'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register', 'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/lockscreen', 'AuthenticationController@lockscreen')->name('authentication.lockscreen');
Route::get('authentication/forgot', 'AuthenticationController@forgot')->name('authentication.forgot');
Route::get('authentication/page404', 'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/page500', 'AuthenticationController@page500')->name('authentication.page500');
Route::get('authentication/offline', 'AuthenticationController@offline')->name('authentication.offline');

/* Pages */
Route::get('pages', function () { return redirect('pages/blank-page'); });
Route::get('pages/blank', 'PagesController@blank')->name('pages.blank');
Route::get('pages/gallery', 'PagesController@gallery')->name('pages.gallery');
Route::get('pages/invoices1', 'PagesController@invoices1')->name('pages.invoices1');
Route::get('pages/invoices2', 'PagesController@invoices2')->name('pages.invoices2');
Route::get('pages/pricing', 'PagesController@pricing')->name('pages.pricing');
Route::get('pages/profile', 'PagesController@profile')->name('pages.profile');
Route::get('pages/search', 'PagesController@search')->name('pages.search');
Route::get('pages/timeline', 'PagesController@timeline')->name('pages.timeline');

/* Maps */
Route::get('map', function () { return redirect('map/google'); });
Route::get('map/yandex', 'MapController@yandex')->name('map.yandex');
Route::get('map/jvector', 'MapController@jvector')->name('map.jvector');
		
		Route::group(['middleware'=>['auth:admin']] , function(){ 
			Route::post('/logout', [HomeController::class, 'AdminLogOut'])->name('tenant.admin.logout.submit');
			// Route::get('/' , function(){
			// 	return redirect('admin/dashboard/index');
	 	// 	})->name('tenant.admin.home');

	 		Route::get('dashboard', function () { return redirect('dashboard/index'); });
			Route::get('/', [HomeController::class, 'Index'])->name('dashboard.index');
			Route::get('staff/staff-list', [StaffController::class, 'index'])->name('tenant.admin.staff.index');
			Route::get('staff/create-staff', [StaffController::class, 'create'])->name('tenant.admin.staff.create');
			Route::post('staff/create-staff', [StaffController::class, 'store'])->name('tenant.admin.staff.store');
			Route::get('roles/role-list', [RoleController::class, 'index'])->name('tenant.admin.role.index');
			Route::get('roles/create-role', [RoleController::class, 'create'])->name('tenant.admin.role.create');
			Route::post('roles/create-role', [RoleController::class, 'store'])->name('tenant.admin.role.store');

			Route::get('hotels/hotel-list', [HotelController::class, 'index'])->name('tenant.admin.hotel.list');
			Route::get('hotels/hotel-create', [HotelController::class, 'create'])->name('tenant.admin.hotel.create');
			Route::post('hotels/hotel-create', [HotelController::class, 'store'])->name('tenant.admin.hotel.store');
			
			// Route::get('hotels/hotel-edit', [RoleController::class, 'index'])->name('tenant.admin.hotel.edit');
			Route::get('/hotels/show-form' , function(){
			 return view('tenant.admin.hotels.show-form');
			 })->name('tenant.admin.hotel.show-form');
			 
			 
			 Route::group(["prefix"=>"/hotel/{hotel_code}"] , function(){
			 	Route::get('/' , [HotelController::class , 'hotelDashboard'])->name('tenant.admin.hotel.dashboard');

			 	/* Hotel Setting*/
			 Route::get('hotel-setting/upload-logo', [HotelSettingController::class, 'upload'])->name('tenant.admin.hotelSetting.upload');
			 Route::post('hotel-setting/storeupload', [HotelSettingController::class, 'storeupload'])->name('tenant.admin.hotelSetting.storeupload');
			 Route::get('hotel-setting/policy', [HotelSettingController::class, 'policy'])->name('tenant.admin.hotelSetting.policy');
			 Route::post('hotel-setting/save-policy', [HotelSettingController::class, 'savepolicy'])->name('tenant.admin.hotelSetting.savepolicy');
			 Route::get('hotel-setting/profile-pic', [HotelSettingController::class, 'picture'])->name('tenant.admin.hotelSetting.picture');
			 Route::get('hotel-setting/hotel-near', [HotelSettingController::class, 'nearby'])->name('tenant.admin.hotelSetting.nearby');
			 Route::post('hotel-setting/storenearby', [HotelSettingController::class, 'storenearby'])->name('tenant.admin.hotelSetting.storenearby');

			 //Route::get('hotel-setting/deposite-refund', [HotelSettingController::class, 'policy'])->name('tenant.admin.hotelSetting.policy');
			 Route::post('hotel-setting/typeofroom', [HotelSettingController::class, 'typeofroom'])->name('tenant.admin.hotelSetting.typeofroom');
			 Route::get('hotel-setting/room-type', [HotelSettingController::class, 'type'])->name('tenant.admin.hotelSetting.type');

              Route::post('hotel-setting/detail', [HotelSettingController::class, 'detail'])->name('tenant.admin.hotelSetting.detail');
              Route::get('hotel-setting/account-detail', [HotelSettingController::class, 'showdetail'])->name('tenant.admin.hotelSetting.showdetail');
			 
			 Route::post('hotel-setting/taxes', [HotelSettingController::class, 'taxes'])->name('tenant.admin.hotelSetting.taxes');
			 Route::get('hotel-setting/applicable-taxes', [HotelSettingController::class, 'showtaxes'])->name('tenant.admin.hotelSetting.showtaxes');
             Route::post('hotel-setting/listed', [HotelSettingController::class, 'listed'])->name('tenant.admin.hotelSetting.listed');
             Route::get('hotel-setting/menu-list', [HotelSettingController::class, 'showlist'])->name('tenant.admin.hotelSetting.showlist');
             Route::post('hotel-setting/variety', [HotelSettingController::class, 'variety'])->name('tenant.admin.hotelSetting.variety');
             Route::get('hotel-setting/menu-type', [HotelSettingController::class, 'showmenu'])->name('tenant.admin.hotelSetting.showmenu');
             Route::post('hotel-setting/prices', [HotelSettingController::class, 'prices'])->name('tenant.admin.hotelSetting.prices');
             Route::get('hotel-setting/menu-price', [HotelSettingController::class, 'pricemenu'])->name('tenant.admin.hotelSetting.pricemenu');

             Route::get('hotel-setting/cancel-policy', [HotelSettingController::class, 'cancel'])->name('tenant.admin.hotelSetting.cancel');
			 Route::get('hotel-setting/no-show-policy', [HotelSettingController::class, 'none'])->name('tenant.admin.hotelSetting.none');
			 Route::get('hotel-setting/kids-policy', [HotelSettingController::class, 'kids'])->name('tenant.admin.hotelSetting.kids');
			 Route::get('hotel-setting/resident-policy', [HotelSettingController::class, 'resident'])->name('tenant.admin.hotelSetting.resident');
			 Route::get('hotel-setting/beverages-policy', [HotelSettingController::class, 'beverages'])->name('tenant.admin.hotelSetting.beverages');
			 
			 
			 /* banquet */
			 Route::get('hotel-setting/banquet-list', [HotelSettingController::class, 'listing'])->name('tenant.admin.hotelSetting.listing');
			 Route::get('hotel-setting/banquet-create', [HotelSettingController::class, 'create'])->name('tenant.admin.hotelSetting.create');
			 Route::post('hotel-setting/collection', [HotelSettingController::class, 'collection'])->name('tenant.admin.hotelSetting.collection');

			  Route::get('hotel-setting/import-hotel-settings', [HotelSettingController::class, 'importHotelSettings'])->name('tenant.admin.hotelSetting.importHotelSettings');
			  Route::post('hotel-setting/import-hotel-settings', [HotelSettingController::class, 'importHotelSettingsStore'])->name('tenant.admin.hotelSetting.importHotelSettingsStore');

			 Route::get('/hotel-contract', [HotelController::class, 'showContract'])->name('tenant.admin.hotel.contract');
			Route::post('/hotel-contract', [HotelController::class, 'storeContract'])->name('tenant.admin.hotel.contract.store');
			
			 Route::get('/perposal-template/{lead_id}' , [PerposalController::class , 'showPerposalTemplate'])->name('tenant.admin.showPerposalTemplate');

			 Route::post('/perposal-template/{lead_id}' , [PerposalController::class , 'storePerposal'])->name('tenant.admin.showPerposalTemplate.store');

			 Route::get('/perposal-template/edit/{booking_id}' , [PerposalController::class , 'editPerposal'])->name('tenant.admin.editPerposal');

			 Route::get('/perposal-template/show/{booking_id}' , [PerposalController::class , 'showPerposal'])->name('tenant.admin.showPerposal');

			 });

			 Route::get('/contract-content' , [ContractController::class , 'showForm'])->name('tenant.admin.hotel.contract.content');
			 Route::post('/contract-content' , [ContractController::class , 'store'])->name('tenant.admin.hotel.contract.content.store');

			

			 Route::get('/test' , [HotelController::class , 'test']);



			});
	});
 });
