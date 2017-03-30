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

Auth::routes();

Route::get('/home', 'HomeController@index');

// localhost:8000/maintenanceReps
Route::get('maintenanceReps', function(){
	return view('maintenance_reps');
});

// report mgt
Route::post('submitReport', array('uses' => 'ReportController@store'));
Route::get('view_report', function(){
	$reports = DB::table('reports')->get();
	return view('view_report');//->with('reports', $reports);
});

Route::get('display_report', function(){
	$reports = DB::table('reports')->get();
});