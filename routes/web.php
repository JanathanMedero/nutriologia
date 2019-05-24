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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('Dashboard');
    Route::get('/patients', 'PatientController@index')->name('patients.index');
    Route::get('/patients/new-patient', 'PatientController@create')->name('patients.create');
});
