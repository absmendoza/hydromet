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

Route::resource('reports','ReportController');
Route::get('addMaintenanceReport', array('uses'=> 'MaintenanceController@addRepView'));
Route::get('viewMaintenanceReports', array('uses'=> 'MaintenanceController@allRepsView'));
Route::get('viewMyMaintenanceReports', array('uses'=> 'MaintenanceController@myRepsView'));

Route::get('success', function(){
    return view('Reports/success');
});

Route::get('viewUsers', function(){
	return view('view_users');
});

Route::get('/users/serverSide', [
    'as'   => 'users.serverSide',
    'uses' => function () {
        $users = App\User::select(['id', 'name', 'employee_id', 'position', 'email', 'contact_num', 'created_at']);

        return Datatables::of($users)->make();
    }
]);

Route::resource('userCRUD','UserCRUDController');