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

use Illuminate\Support\Facades\Route;

Route::get('/',[
	'uses'=>'CustomerController@index',
	'as' => ('/')
]);

Route::get('/register',function(){
return view('register');
});

//userlogin
Route::get('/customer/login',[
	'uses' => 'CustomerLoginController@login',
	'as' => 'customer.login'
]);
Route::post('/customer/login/validate',[
	'uses' => 'CustomerLoginController@validateLogin',
	'as' => 'customer.validate'
]);

Route::get('/customer/request_service',[
	'uses' => 'RequestedServiceController@request_service',
	'as' => 'request_service'
]);

Route::get('/customer/employee/view_request',[
	'uses' => 'EmployeeViewRequestController@employee_view_requests',
	'as' => 'view_requests'
]);



Route::get('/customer/register',[
	'uses' => 'CustomerLoginController@cregister',
	'as' => 'customer.register'
]);

Route::post('/customer/store',[
	'uses' => 'CustomerLoginController@store',
	'as' => 'customer.store'
]);
Route::get('/admin/login', [
	'uses' => 'AdminController@login',
	'as' => 'admin.login'
]);

//Admin
Route::post('admin/login/validate', [
	'uses' => 'AdminController@validateLogin',
	'as' => 'admin.validate'
]);
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
	Route::get('/index',[
		'uses' => 'AdminController@index',
		'as' => 'admin.dashboard',
	]);

	Route::get('/sitesettings',[
		'uses'=>'SiteSettingsController@index',
		'as'=> 'sitesettings'


	]);

	Route::get('/sitesettings/slideDesc',[
		'uses'=>'SiteSettingsController@slideDesc',
		'as'=> 'sitesettings.slideDesc'
	]);

	Route::post('/sitesettings/store',[
		'uses'=>'SiteSettingsController@store',
		'as'=> 'slideDesc.store'
	]);

	Route::post('/sitesettings/update',[
		'uses'=>'SiteSettingsController@update',
		'as'=> 'sitesettings.update'


	]);
	Route::get('/sitesettings/timedesc',[
		'uses'=>'SiteSettingsController@time_desc',
		'as'=> 'sitesettings.time_desc'


	]);
	Route::post('/sitesettings/timedesc',[
		'uses'=>'SiteSettingsController@time_desc_store',
		'as'=> 'sitesettings.time_desc_store'


	]);
	Route::post('/sitesettings/timedesc/update',[
		'uses'=>'SiteSettingsController@time_desc_update',
		'as'=> 'sitesettings.time_desc_update'


	]);


	Route::get('/customers',[
		'uses'=>'AdminCustomerController@index',
		'as'=> 'customers'
	]);
	Route::get('/customers/delete/{id}',[
		'uses'=>'AdminCustomerController@destroy',
		'as'=> 'customers.delete'
	]);

	Route::get('/images',[
		'uses' => 'ImageController@index',
		'as' =>   'images'
	]);

	Route::get('/images/create',[
		'uses' => 'ImageController@create',
		'as' =>   'images.create'
	]);
	Route::post('/images/store',[
		'uses' => 'ImageController@store',
		'as' =>   'images.store'
	]);
	Route::get('/images/edit{id}',[
		'uses' => 'ImageController@edit',
		'as' =>   'images.edit'
	]);
	Route::post('/images/update{id}',[
		'uses' => 'ImageController@upFdate',
		'as' =>   'images.update'
	]);
	Route::get('/images/delete{id}',[
		'uses' => 'ImageController@destroy',
		'as' =>   'images.delete'
	]);
	Route::get('/logout',[
		'uses' => 'AdminController@logout',
		'as' => 'admin.logout'
	]);
	
	Route::get('/forgot-password', function () {
		return view('admin.forgot-password');
	});
	//Employee
	Route::get('/employees','EmployeeController@index')->name('employees');
	Route::get('/employees/create','EmployeeController@create')->name('employee.create');
	Route::post('/employees/store','EmployeeController@store')->name('employee.store');
	Route::get('/employees/edit{id}','EmployeeController@edit')->name('employee.edit');
	Route::post('/employees/update{id}','EmployeeController@store')->name('employee.update');
	Route::get('/employees/delete/{id}','EmployeeController@destroy')->name('employee.delete');
	Route::get('/employees/unvarified','EmployeeController@unvarified_employee')->name('employee.unvarified');
	Route::get('/employees/verify_employee/{id}','EmployeeController@verify_employee')->name('employee.verify');
	//Services
	Route::get('/services','ServiceController@index')->name('services');
	 Route::get('/requested_services','ServiceController@request_service')->name('service.requests');
	Route::get('/services/create','ServiceController@create')->name('service.create');
	Route::post('/services/store','ServiceController@store')->name('service.store');
	Route::get('/services/edit{id}','ServiceController@edit')->name('service.edit');
	Route::post('/services/update{id}','ServiceController@update')->name('service.update');
	Route::get('/services/delete{id}','ServiceController@destroy')->name('service.delete');
	Route::get('/services/assignservice/{id}','ServiceController@assign_service')->name('service.assign');
	Route::get('/services/assignservice/employee/{service_id}/{employee_id}','ServiceController@assign_service_employee')->name('assign.employee');

	Route::get('/services/change_status/{id}','ServiceController@change_status')->name('service.change_status');


	//Address
	Route::get('/address','AddressController@address')->name('address');
	Route::get('/address/create','AddressController@create')->name('address.create');
	Route::post('/address/store','AddressController@store')->name('address.store');
	Route::get('/address/edit{id}','AddressController@edit')->name('address.edit');
	Route::get('/address/update{id}','AddressController@update')->name('address.update');
	Route::get('/address/destroy{id}','AddressController@destroy')->name('address.delete');


});

//Customer
Route::group(['prefix' => 'customer',], function () {

	
	
	
	Route::get('/customer/logout',[
		'uses' => 'CustomerLoginController@logout',
		'as' => 'customer.logout'
	]);
	Route::post('/request_service/store',[
		'uses' => 'RequestedServiceController@store',
		'as' => 'request_service.store'
	]);
	Route::get('/aboutus',[
		'uses' => 'AboutUsController@index',
		'as' => 'customer.aboutus'
	]);

	Route::get('/services',[
		'uses' => 'CustomerServicesController@index',
		'as' => 'customer.services'
	]);

	Route::get('/services/service_details/{id}',[
		'uses' => 'CustomerController@service_details',
		'as' => 'services.service_details'
	]);


	Route::get('/services/basic_package/{id}',[
		'uses' => 'CustomerController@basic_package',
		'as' => 'services.basic_package'
	]);
	Route::get('/services/valued_package/{id}',[
		'uses' => 'CustomerController@valued_package',
		'as' => 'services.valued_package'
	]);
	Route::get('/services/unlimited_package/{id}',[
		'uses' => 'CustomerController@unlimited_package',
		'as' => 'services.unlimited_package'
	]);

	Route::get('/profile',[
		'uses' => 'CustomerController@customer_Profile',
		'as' => 'customer.profile'
	]);
	Route::get('/request_log',[
		'uses' => 'CustomerController@request_log',
		'as' => 'customer.request_log'
	]);



	Route::get('/contactus',[
		'uses' => 'ContactUsController@contact_us',
		'as' => 'customer.contact_us'
	]);

	Route::get('/blog',[
		'uses' => 'BlogController@blog',
		'as' => 'customer.blog'
	]);

    Route::get('/login',[
			'uses' => 'CustomerLoginController@login',
			'as' => 'customer.login'
	]);	
	
	Route::get('/amc',[
		'uses' => 'CustomerController@amc',
		'as' => 'customer.amc'
]);

Route::get('/getajob',[
	'uses' => 'CustomerController@get_a_job',
	'as' => 'get_a_job'
]);

Route::post('/update_rate',[
	'uses' => 'CustomerController@update_rate',
	'as' => 'update_rate'
]);



});

Route::get('/employee/login',[
	'uses' => 'EmployeeLoginController@login',
	'as' => 'employee.login'
]);
Route::get('/employee/register',[
	'uses' => 'EmployeeLoginController@register',
	'as' => 'employee.register'
]);

Route::post('/employee/store',[
	'uses' => 'EmployeeLoginController@store',
	'as' => 'employee.insert'
]);
Route::post('/employee/login/validate',[
	'uses' => 'EmployeeLoginController@validateLogin',
	'as' => 'employee.validateLogin'
	]);

Route::group(['prefix' => 'employee','middleware' => 'employee'],function(){
	Route::get('/logout',[
		'uses' => 'EmployeeLoginController@logout',
		'as' => 'employee.logout'
	]);
	Route::get('/dashboard',[
		'uses' => 'EmployeeController@dashboard',
		'as' => 'employee.dashboard'
	]);
	Route::get('/view_service_requests',[
		'uses' => 'EmployeeController@view_service_request',
		'as' => 'view_service_requests'
	]);
	Route::get('/assigned_by_admin',[
		'uses' => 'EmployeeController@assigned_by_admin',
		'as' => 'assigned_by_admin'
	]);
	Route::get('/change_employee_status_completed/{id}',[
		'uses' => 'EmployeeController@change_employee_status_completed',
		'as' => 'change_employee_status_completed'
	]);
	


	Route::get('/edit_details{id}',[
		'uses' => 'EmployeeController@edit_details',
		'as' => 'edit_employee_details'
	]);

	Route::post('/update_details{id}',[
		'uses' => 'EmployeeController@update_details',
		'as' => 'update_employee_details'
	]);


	Route::get('/change_service_status/{id}',[
		'uses' => 'RequestedServiceController@change_status',
		'as' => 'change_service_status'
	]);
	Route::get('/show_status/{id}',[
		'uses' => 'RequestedServiceController@show_status',
		'as' => 'show_status'
	]);
	Route::get('/change_show_status/{id}',[
		'uses' => 'RequestedServiceController@change_show_status',
		'as' => 'change_show_status'
	]);

	Route::get('/change_service_status_completed/{id}',[
		'uses' => 'RequestedServiceController@change_status_completed',
		'as' => 'change_service_status_completed'
	]);

	
});

Route::post('/payment/verification',[
	'uses' => 'OrderController@verifyPayment',
	'as' => 'payment.verification'
]);

Route::post('/payment/createOrder',[
	'uses' => 'OrderController@makeOrder',
	'as' => 'order.make'
]);

Route::post('/payment/verification/valued_package',[
	'uses' => 'OrderController@verifyPayment1',
	'as' => 'payment.verification.valued_package'
]);



Route::post('/payment/createOrder/valued_package',[
	'uses' => 'OrderController@makeOrder_valued_package',
	'as' => 'order.make.valued_package'
]);

Route::post('/payment/verification/unlimited_package',[
	'uses' => 'OrderController@verifyPayment1',
	'as' => 'payment.verification.unlimited_package'
]);

Route::post('/payment/createOrder/unlimited_package',[
	'uses' => 'OrderController@makeOrder_unlimited_package',
	'as' => 'order.make.unlimited_package'
]);

   




	
