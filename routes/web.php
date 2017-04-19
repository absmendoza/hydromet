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
<<<<<<< HEAD
   


    return view('welcome');//->with('notifs', $notifs);
=======
    return view('index');
>>>>>>> e15c1cab7200cc1589a8bd7c0c8758163864ad17
});


// localhost:8000/maintenanceReps
Route::get('maintenanceReps', function(){
	return view('maintenance_reps');
});

<<<<<<< HEAD
=======

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

>>>>>>> 52fcff3d34e9ae92f69e4753a82085b21a735956
Route::get('/users/serverSide', [
    'as'   => 'users.serverSide',
    'uses' => function () {
        $users = App\User::select(['id', 'name', 'employee_id', 'position', 'email', 'contact_num', 'created_at']);

        return Datatables::of($users)->make();
    }
]);

// Group of ROUTES w Permissions
Route::group(['middleware' => 'web'], function () {
 Route::auth();

    // User CRUD Modul
	Route::get('userCRUD', [
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

    Route::delete('/userCRUD/{id}/destroy', [
        'uses' => 'UserCRUDController@destroy',
        'as' => 'userCRUD.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    
    // Maintenance Report Module
    Route::get('/viewMyMaintenanceReports', [
        'uses'=> 'MaintenanceController@myRepsView',
        'as' => 'viewMyMaintenanceReports',
        'middleware' => 'roles',
        'roles' => ['Head', 'User']
    ]);

    Route::get('/viewMaintenanceReports', [
        'uses'=> 'MaintenanceController@allRepsView',
        'as' => 'viewMaintenanceReports',
        'middleware' => 'roles',
        'roles' => ['Head', 'User', 'Admin']
    ]);

    Route::get('/addMaintenanceReport', [
        'uses'=> 'MaintenanceController@addRepView',
        'as' => 'addMaintenanceReport',
        'middleware' => 'roles',
        'roles' => ['Head', 'User']
    ]);

    Route::resource('reports','ReportController',
    [
        'middleware' => 'roles',
        'roles' => ['User', 'Head']
    ]);

    Route::get('success', function(){
        return view('Reports/success');
    });
});