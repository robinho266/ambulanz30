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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	//Route::resource('/patientdata', 'PatientdataController');
	Route::get('/patientdata', 'PatientdataController@show')->name('patientdata.show');
	Route::get('/patientdata/create', 'PatientdataController@create')->name('patientdata.create');
	Route::get('/patientdata/edit', 'PatientdataController@edit')->name('patientdata.edit');
	Route::post('/patientdata', 'PatientdataController@store')->name('patientdata.store');
	Route::post('/patientdata/update', 'PatientdataController@update')->name('patientdata.update');
	Route::get('/upload', 'DataUploadController@showUpload')->name('dataupload.show');
	Route::post('/upload', 'DataUploadController@upload')->name('dataupload.upload');
	Route::post('/store', 'DataUploadController@store')->name('dataupload.store');

	// Route::get('/patientdata', 'PatientdataController@show')->name('patientdata.show');
	Route::get('/anamnesis', 'AnamnesisController@show')->name('anamnesis.show');
	Route::get('/anamnesis/create', 'AnamnesisController@create')->name('anamnesis.create');
	Route::get('/anamnesis/edit', 'AnamnesisController@edit')->name('anamnesis.edit');
	Route::post('/anamnesis', 'AnamnesisController@store')->name('anamnesis.store');
	Route::post('/anamnesis/update', 'AnamnesisController@update')->name('anamnesis.update');



	Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
		Route::get('/patients', 'PatientController@index')->name('patients.index');
		Route::get('/patient/{patient}', 'PatientController@show')->name('patient.show');
	});

	Route::get('auth/token','Auth\AuthController@getToken');
	Route::post('auth/token','Auth\AuthController@postToken');
});


