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
   


    return view('welcome');//->with('notifs', $notifs);
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// localhost:8000/maintenanceReps
Route::get('maintenanceReps', function(){
	return view('maintenance_reps');
});


Route::get('sample', function () {
    return view('x.sample');
});

/* NOTIFS ROUTES*/
Route::resource('notifications','NotificationController');
Route::get('viewPendingReports', array('uses'=> 'ReportController@show_pending'));

/* REPORTS ROUTES */
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
        $users = App\User::select(['id', 'name', 'email', 'created_at']);

        return Datatables::of($users)->make();
    }
]);

// for datatables (inspired by ItemCRUD)
Route::resource('userCRUD','UserCRUDController');