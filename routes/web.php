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
Route::group(['middleware' => ['prevent-back-history'] ], function(){ 

Route::get('/', function () {
    return redirect('login');
});

//Auth::routes();

 Auth::routes(['verify' => true]); 

Route::get('/home', 'HomeController@index')->name('home');


// Route::group(['prefix' => 'dashboard'], function () {
//     Route::get('/', 'Admin\Manage_DashboardController@view_dashboard')->name('dashboard');
//     Route::match(['get', 'post'], 'create', 'Admin\Manage_DashboardController@create');
//     Route::match(['get', 'put'], 'update/{id}', 'Admin\Manage_DashboardController@update');
//     Route::delete('delete/{id}', 'Admin\Manage_DashboardController@delete');
// });



Route::group(['prefix' => 'Appointment'], function () {
    Route::get('/', 'Admin\AppointmentController@index')->name('Appointment');
});

Route::group(['prefix' => 'Client'], function () {
    Route::get('/', 'Admin\ClientController@index')->name('Client');
    Route::match(['get', 'post'], 'create', 'Admin\ClientController@create');
    Route::match(['get', 'put'], 'update/{id}', 'Admin\ClientController@update');
    Route::delete('delete/{id}', 'Admin\ClientController@delete');
});

Route::group(['prefix' => 'Doctor'], function () {
    Route::get('/', 'Admin\DoctorController@index')->name('Doctor');
});

Route::group(['prefix' => 'WorkingHours'], function () {
    Route::get('/', 'Admin\WorkingHoursController@index')->name('WorkingHours');
});

Route::group(['prefix' => 'BackupDatabase'], function () {
    Route::get('/', 'Admin\BackupDatabaseController@index')->name('BackupDatabase');
});

Route::group(['prefix' => 'ManageAccount'], function () {
    Route::get('/', 'Admin\ManageAccountController@index')->name('ManageAccount');
});

});