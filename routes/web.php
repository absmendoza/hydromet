<?php
use Yajra\Datatables\Datatables;
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

Route::get('viewUsers', function(){
	return view('view_users');
});

Route::get('/users/serverSide', [
    'as'   => 'users.serverSide',
    'uses' => function () {
        $users = App\User::select(['id', 'name', 'email', 'created_at']);

        return Datatables::of($users)->make();
    }
]);

// for datatables (inspired by ItemCRUD)
Route::resource('userCRUD','UserCRUDController');