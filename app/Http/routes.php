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

Route::get('/', 'HomeController@getHome');

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function(){
	Route::get('login', 'AuthController@getLogin');
	Route::post('login', 'AuthController@postLogin');
	Route::get('logout', 'AuthController@getLogout');
});

Route::group(['prefix'=>'restaurants'], function(){
	
	Route::get('/', 'RestaurantController@getIndex');
	
	Route::get('add', 'RestaurantController@getAdd');
	Route::post('add', 'RestaurantController@postAdd');

	Route::get('{id}', 'RestaurantController@getRestaurant');
	Route::put('{id}', 'RestaurantController@putRestaurant');
	Route::delete('{id}', 'RestaurantController@deleteRestaurant');
	
});

Route::group(['prefix'=>'cashier'], function(){
	
	Route::get('/', 'CashierController@getIndex');

	Route::get('add', 'CashierController@getAdd');
	Route::post('add', 'CashierController@postAdd');
	
	Route::get('{id}', 'CashierController@getCashier');
	Route::put('{id}', 'CashierController@putCashier');
	Route::delete('{id}', 'CashierController@deleteCashier');
	
	Route::group(['prefix'=>'orders'], function(){
		
		Route::get('/', 'OrderController@getIndex');
		
		Route::get('add', 'OrderController@getAdd');
		Route::post('add', 'OrderController@postAdd');
		
		Route::get('{id}', 'OrderController@getOrder');
		Route::put('{id}', 'OrderController@putOrder');
		Route::delete('{id}', 'OrderController@deleteOrder');
		
	});

});

Route::group(['prefix'=>'users'], function(){
	
	Route::get('/', 'UserController@getIndex');

	Route::get('add', 'UserController@getAdd');
	Route::post('add', 'UserController@postAdd');
	
	Route::group(['prefix'=>'send'], function(){
		
		Route::get('/', 'OrderController@getSend');
		Route::post('/', 'OrderController@postSend');
		
	});
	
	Route::group(['prefix'=>'reserve'], function(){

		Route::get('/', 'ReservationController@getIndex');
		
		Route::get('add', 'ReservationController@getAdd');
		Route::post('add', 'ReservationController@postAdd');
		
		Route::get('{id}', 'ReservationController@getReservation');
		Route::put('{id}', 'ReservationController@putReservation');
		Route::delete('{id}', 'ReservationController@deleteReservation');

	});
	Route::group(['prefix'=>'bill'], function(){
		
		Route::get('/', 'OrderController@getBill');
		Route::get('/print', 'OrderController@getPrint');
		
	});

});

Route::get('admin', 'HomeController@getAdmin');