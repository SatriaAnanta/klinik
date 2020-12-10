<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/a', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('homePage');
// });

// Route::get('/dokter', function () {
//     return view('browseDoctor');
// });

Route::get('/dokter/profile', function () {
    return view('profileDoctor');
});

Route::get('/', 'App\Http\Controllers\SpecialtyController@index');
Route::get('/dokter', 'App\Http\Controllers\DoctorController@index');
Route::get('/dokter/spesialis/{slug}', 'App\Http\Controllers\DoctorController@specialty');
Route::get('/dokter/profil/{slug}', 'App\Http\Controllers\DoctorController@profile');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('doctor-management', ['as' => 'doctor.index', 'uses' => 'App\Http\Controllers\DoctorController@doctorManagement']);
	Route::delete('delete-doctor/{id}', ['as' => 'doctor.delete', 'uses' => 'App\Http\Controllers\DoctorController@delete']);

	Route::get('add-doctor', ['as' => 'doctor.add', 'uses' => 'App\Http\Controllers\DoctorController@add']);
	Route::put('add-doctor', ['as' => 'doctor.insert', 'uses' => 'App\Http\Controllers\DoctorController@insert']);

	Route::get('edit-doctor/{id}', ['as' => 'doctor.edit', 'uses' => 'App\Http\Controllers\DoctorController@edit']);
	Route::put('edit-doctor', ['as' => 'doctor.update', 'uses' => 'App\Http\Controllers\DoctorController@update']);

	Route::get('specialty-management', ['as' => 'specialty.index', 'uses' => 'App\Http\Controllers\SpecialtyController@specialtyManagement']);
	Route::delete('delete-specialty/{id}', ['as' => 'specialty.delete', 'uses' => 'App\Http\Controllers\SpecialtyController@delete']);

	Route::get('add-specialty', ['as' => 'specialty.add', 'uses' => 'App\Http\Controllers\SpecialtyController@add']);
	Route::put('add-specialty', ['as' => 'specialty.insert', 'uses' => 'App\Http\Controllers\SpecialtyController@insert']);

	Route::get('edit-specialty/{id}', ['as' => 'specialty.edit', 'uses' => 'App\Http\Controllers\SpecialtyController@edit']);
	Route::put('edit-specialty', ['as' => 'specialty.update', 'uses' => 'App\Http\Controllers\SpecialtyController@update']);

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::get('patient-management', ['as' => 'patient.index', 'uses' => 'App\Http\Controllers\PatientController@patientManagement']);
	Route::delete('patient-specialty/{id}', ['as' => 'patient.delete', 'uses' => 'App\Http\Controllers\PatientController@delete']);

	Route::get('add-patient', ['as' => 'patient.add', 'uses' => 'App\Http\Controllers\PatientController@add']);
	Route::put('add-patient', ['as' => 'patient.insert', 'uses' => 'App\Http\Controllers\PatientController@insert']);

	Route::get('edit-patient/{id}', ['as' => 'patient.edit', 'uses' => 'App\Http\Controllers\PatientController@edit']);
	Route::put('edit-patient', ['as' => 'patient.update', 'uses' => 'App\Http\Controllers\PatientController@update']);
});


