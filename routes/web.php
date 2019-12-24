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

//everything here concerns contact form
Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');


Route::view('aboutus', 'about')->middleware('test');



//this is when the return statement is in the controller,

/*
    // you use get to get the required information from list and display them in the customers view page
    // this is also what displays all companies in the customer table;
    Route::get('companies', 'CompaniesController@list');
    Route::post('companies', 'CompaniesController@store');

    //following the resource method following laravel syntax
    //everything here concerns the customers
    Route::get('customers', 'CustomersController@index');
    Route::get('customers/create', 'CustomersController@create');
    //we are posting the values gotten from customer view page into the Customers table via the store method
    Route::post('customers', 'CustomersController@store');
    Route::get('customers/{customer}', 'CustomersController@show');
    Route::get('customers/{customer}/edit', 'CustomersController@edit');
    Route::patch('customers/{customer}', 'CustomersController@update');
    Route::delete('customers/{customer}', 'CustomersController@destroy');
*/

//since these routes all followed Laravel Resource syntax, we can just use one line for everything
//we don't want the customers to go through customers unless the user is logged in, we can add a ->middleware('auth') to the end of the file
//or we can go to the controller and restrict it there
Route::resource('customers', 'CustomersController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
