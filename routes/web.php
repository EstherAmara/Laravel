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

//Route::get('/', function () {
//    return view('welcome');
//});

// Route::get('contact', function () {
//     return view('contact');
// });

// Route::get('about', function () {
//     return view('about');
// });

//These is a simplified one.
Route::view('/', 'home');
Route::view('contactus', 'contact');
Route::view('aboutus', 'about');


//this is when the return statement is in the controller,
// you use get to get the required information from list and display them in the customers view page
// this is also what displays all customers in the customer table
Route::get('customers', 'CustomersController@index');
Route::get('customers/create', 'CustomersController@create');

//we are posting the values gotten from customer view page into the Customers table via the store method
Route::post('customers', 'CustomersController@store');
Route::get('companies', 'CompaniesController@list');
Route::post('companies', 'CompaniesController@store');
Route::get('customers/{customer}', 'CustomersController@show');
Route::get('customers/{customer}/edit', 'CustomersController@edit');
Route::patch('customers/{customer}', 'CustomersController@patch');


