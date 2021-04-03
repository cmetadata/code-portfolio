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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/help', function () {
	return view('help');
});

Route::get('/login', function () {
	return view('login');
});

Route::get('/reports/patient-bill', function () {
	return view('reports.patient-bill');
});

Route::get('/reports/room-utilization', function () {
	return view('reports.room-utilization');
});

Route::get('/reports/mortality-rates', function () {
	return view('reports.mortality-rates');
});

Route::get('/reports/revenue-analysis', function () {
	return view('reports.revenue-analysis');
});

Route::get('/reports/healthcare-associated-incident', function () {
	return view('reports.healthcare-associated-incident');
});

Route::get('/reports/daily-revenue', function () {
	return view('reports.daily-revenue');
});



//Route::get('/mortalityReports', 'MortalityReport@index');

//A HAI is a health care-associated incident
//Route::get('/haiReports', 'HaieReportsController@index');


//PATIENTS
Route::get('/patients/create', 'PatientController@create');
Route::get('/patients/show', 'PatientController@show');
Route::get('/patients', 'PatientController@index');
Route::get('/patients/edit', 'PatientController@edit');

//PHYSICIANS
Route::get('/physicians/create', 'PhysicianController@create');
Route::get('/physicians/show', 'PhysicianController@show');
Route::get('/physicians', 'PhysicianController@index');
Route::get('/physicians/edit', 'PhysicianController@edit');

//ROOMS
Route::get('/rooms/show', 'RoomController@show');
Route::get('/rooms/create', 'RoomController@create');
Route::get('/rooms', 'RoomController@index');
Route::get('/rooms/edit', 'RoomController@edit');

//ITEMS
Route::get('/items/show', 'ItemController@show');
Route::get('/items/create', 'ItemController@create');
Route::get('/items', 'ItemController@index');
Route::get('/items/edit', 'ItemController@edit');

//COST CENTRES
Route::get('/cost-centres/create', 'CostCentreController@create');
Route::get('/cost-centres/show', 'CostCentreController@show');
Route::get('/cost-centres', 'CostCentreController@index');
Route::get('/cost-centres/edit', 'CostCentreController@edit');

//PATIENT BILLS
Route::get('/patient-bills/create', 'PatientBillController@create');
Route::get('/patient-bills/show', 'PatientBillController@show');
Route::get('/patient-bills', 'PatientBillController@index');
Route::get('/patient-bills/edit', 'PatientBillController@edit');

//TRANSACTIONS
Route::get('/transactions/create', 'TransactionController@create');
Route::get('/transactions/show', 'TransactionController@show');
Route::get('/transactions', 'TransactionController@index');
Route::get('/transactions/edit', 'TransactionController@edit');