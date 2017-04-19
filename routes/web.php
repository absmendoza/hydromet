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

    return view('index');

});

Auth::routes();

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

Route::get('/users/serverSide', [
    'as'   => 'users.serverSide',
    'uses' => function () {
        $users = App\User::select(['id', 'name', 'employee_id', 'position', 'email', 'contact_num', 'created_at']);

        return Datatables::of($users)->make();
    }
]);

//Route::resource('userCRUD','UserCRUDController');

/*
Route::group(['middleware' => 'roles'], function() {
    Route::resource('/userCRUD', 'UserCRUDController', 
        [
		'roles' => 'Visitor'
        ]);
});
*/

Route::group(['middleware' => 'web'], function () {

	Route::get('/userCRUD', [
		'uses' => 'UserCRUDController@index',
		'as' => 'userCRUD.index',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);

    Route::get('/userCRUD/create', [
        'uses' => 'UserCRUDController@create',
        'as' => 'userCRUD.create',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::post('/userCRUD/store/', [
        'uses' => 'UserCRUDController@store',
        'as' => 'userCRUD.store',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::get('/userCRUD/{id}/', [
        'uses' => 'UserCRUDController@show',
        'as' => 'userCRUD.show',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::get('/userCRUD/{id}/edit', [
        'uses' => 'UserCRUDController@edit',
        'as' => 'userCRUD.edit',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::post('/userCRUD/{id}/update/', [
        'uses' => 'UserCRUDController@update',
        'as' => 'userCRUD.update',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::post('/userCRUD/destroy', [
        'uses' => 'UserCRUDController@destroy',
        'as' => 'userCRUD.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
});