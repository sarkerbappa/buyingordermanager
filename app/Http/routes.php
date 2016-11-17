<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middlewareGroups' => ['web']], function () {
	
	Route::any('/admin', array('as' => 'admin', 'uses' => 'UsersController@adminLoginForm'));
        Route::post('/login', array('as' => 'login', 'uses' => 'UsersController@adminLoginCheck'));
        Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@getLogOut'));
        
        // Dashboard
        Route::any('/adminDashboard', array('as' => 'adminDashboard', 'uses' => 'UsersController@adminDashboard'));
        
        // Update user profile
        Route::get('/updateUserProfileForm', array('as' => 'updateUserProfileForm', 'uses' => 'UsersController@updateUserProfileForm'));
        Route::post('/updateUserProfile', array('as' => 'updateUserProfile', 'uses' => 'UsersController@updateUserProfile'));

        
        //Order Submit
        Route::any('/allOrders', array('as' => 'allOrders', 'uses' => 'OrderController@allOrders'));
        Route::any('/order', array('as' => 'order', 'uses' => 'OrderController@orderForm'));
        Route::any('/orderSave', array('as' => 'orderSave', 'uses' => 'OrderController@orderSave'));
        Route::any('/orderView/{id}', array('as' => 'orderView', 'uses' => 'OrderController@orderView'));
        Route::any('/orderEditForm/{id}', array('as' => 'orderEditForm', 'uses' => 'OrderController@orderEditForm'));
        Route::any('/orderDelete/{id}', array('as' => 'orderDelete', 'uses' => 'OrderController@orderDelete'));
        Route::any('/orderEditSave', array('as' => 'orderEditSave', 'uses' => 'OrderController@orderEditSave'));
        
        //Supplier
        Route::any('/supplierList', array('as' => 'supplierList', 'uses' => 'SupplierController@allSuppliers'));
        Route::any('/supplier', array('as' => 'supplier', 'uses' => 'SupplierController@supplierForm'));
        Route::any('/supplierSave', array('as' => 'supplierSave', 'uses' => 'SupplierController@supplierSave'));
        Route::any('/supplierEditForm/{id}', array('as' => 'supplierEditForm', 'uses' => 'SupplierController@supplierEditForm'));
        Route::any('/supplierDelete/{id}', array('as' => 'supplierDelete', 'uses' => 'SupplierController@supplierDelete'));
        Route::any('/supplierEditSave', array('as' => 'supplierEditSave', 'uses' => 'SupplierController@supplierEditSave'));
        
        //Customer
        Route::any('/customerList', array('as' => 'customerList', 'uses' => 'CustomerController@allCustomers'));
        Route::any('/customer', array('as' => 'customer', 'uses' => 'CustomerController@customerForm'));
        Route::any('/customerSave', array('as' => 'customerSave', 'uses' => 'CustomerController@customerSave'));
        Route::any('/customerEditForm/{id}', array('as' => 'customerEditForm', 'uses' => 'CustomerController@customerEditForm'));
        Route::any('/customerDelete/{id}', array('as' => 'customerDelete', 'uses' => 'CustomerController@customerDelete'));
        Route::any('/customerEditSave', array('as' => 'customerEditSave', 'uses' => 'CustomerController@customerEditSave'));
        
        //Brand 
        Route::any('/brandList', array('as' => 'brandList', 'uses' => 'BrandController@allBrands'));
        Route::any('/brand', array('as' => 'brand', 'uses' => 'BrandController@brandForm'));
        Route::any('/brandSave', array('as' => 'brandSave', 'uses' => 'BrandController@brandSave'));
        Route::any('/brandEditForm/{id}', array('as' => 'brandEditForm', 'uses' => 'BrandController@brandEditForm'));
        Route::any('/brandDelete/{id}', array('as' => 'brandDelete', 'uses' => 'BrandController@brandDelete'));
        Route::any('/brandEditSave', array('as' => 'brandEditSave', 'uses' => 'BrandController@brandEditSave'));
});