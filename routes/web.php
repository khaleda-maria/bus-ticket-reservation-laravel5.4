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

/*==============================Admin Controller ===================================*/

Route::get('/admin','AdminController@index');
Route::get('/admin-master','AdminController@admin_master');
Route::post('/admin-login-check','AdminController@admin_login_check');
Route::get('/logout','AdminController@logout');
Route::get('/Passenger_details','AdminController@Passenger_details');



/*==============================Bus Controller ===================================*/
Route::get('/add-bus-details','BusController@add_bus_details');
Route::post('/save-bus-details','BusController@save_bus_details');
Route::get('/manage-bus-details','BusController@manage_bus_details');
Route::get('/add-route-details','BusController@add_route_details');
Route::post('/save-route-details','BusController@save_route_details');
Route::get('/manage-route','BusController@manage_route');
Route::get('/add-counter','BusController@add_counter');
Route::post('/save-counter','BusController@save_counter');
Route::get('/manage-counter','BusController@manage_counter');
Route::get('/add-blocked-seat','BusController@add_blocked_seat');



/*==============================Home Controller ===================================*/

Route::get('/','HomeController@index');
Route::post('/check-bus-availability','HomeController@check_bus_availability');
Route::resource('/seat-view','HomeController@seat_view');
Route::get('seat-fare/{id}','HomeController@seat_fare');
Route::post('save-passenger','HomeController@save_passenger');
//Route::post('pass-id','HomeController@pass_id');



