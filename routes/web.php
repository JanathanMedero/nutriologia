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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/charge', 'OpenPayController@store')->name('openPay.store');
Route::get('/register/verify/{confirmation_code}', 'EmailController@verify')->name('email.verify');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'UserController@dashboard')->name('Dashboard');
    Route::get('/configuration', 'UserController@config')->name('config');

    //Cambiar imñagen de perfil
    Route::put('user/change/picture/{slug}', 'UserController@change_picture')->name('change_picture');

    // Crud Pacientes
    Route::get('/patients', 'PatientController@index')->name('patients.index');
    Route::get('/patients/new-patient', 'PatientController@create')->name('patients.create');
    Route::post('/patients/new-patient', 'PatientController@store')->name('patients.store');
    Route::get('/patient/edit/{slug}', 'PatientController@edit')->name('patients.edit');
    Route::put('/patients/edit/{slug}', 'PatientController@update')->name('patients.update');
    Route::delete('patient/delete/{slug}', 'PatientController@destroy')->name('patients.destroy');

    // Crud nutriologos
    Route::get('/nutritionists', 'NutritionistController@index')->name('nutritionists.index');
    Route::put('/nutritionists/update/status/{slug}', 'NutritionistController@update')->name('nutritionists.update');

});
