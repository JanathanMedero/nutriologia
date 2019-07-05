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

    //Change password
    Route::put('/change/password/{slug}', 'UserController@change_password')->name('change_password');

    //Cambiar imágen de perfil
    Route::put('user/change/picture/{slug}', 'UserController@change_picture')->name('change_picture');

    // Crud Pacientes
    Route::get('/patients', 'PatientController@index')->name('patients.index');
    Route::get('/patients/new-patient', 'PatientController@create')->name('patients.create');
    Route::post('/patients/new-patient', 'PatientController@store')->name('patients.store');
    Route::get('/patient/show/patient/{slug}', 'PatientController@show')->name('patients.show');
    Route::get('/patient/edit/{slug}', 'PatientController@edit')->name('patients.edit');
    Route::put('/patients/edit/{slug}', 'PatientController@update')->name('patients.update');
    Route::delete('patient/delete/{slug}', 'PatientController@destroy')->name('patients.destroy');

    //Crud de citas (Eventos)
    Route::get('/patients/event/create/{slug}', 'EventController@create')->name('event.create');
    Route::post('/patients/event/created', 'EventController@store')->name('event.store');
    Route::get('/appointments', 'EventController@index')->name('event.index');
    Route::get('/appointments/event/{slug}', 'EventController@show')->name('event.show');
    Route::delete('/appointment/delete/{slug}', 'EventController@destroy')->name('event.delete');

    //Historia Clinica
    Route::get('/patient/{slug}/create/BriefClinicalHistory', 'ClinicHistoryController@BriefClinicalHistory')->name('BriefClinicHistory.create');
    Route::get('/patient/{slug}/ClinicHistory', 'ClinicHistoryController@ClinicalHistoryPatient')->name('ClinicHistoryPatient');
    Route::post('/patient/{slug}/create/BriefClinicHistory/created', 'ClinicHistoryController@BriefClinicHistoryStore')->name('BriefClinicHistory.store');
    Route::get('/patient/{slug}/edit/BriefClinicalHistory', 'ClinicHistoryController@BriefClinicHistoryEdit')->name('BriefClinicalHistory.edit');
    Route::put('/patient/{slug}/BriefClinicHistory/Updated', 'ClinicHistoryController@BriefClinicHistoryUpdate')->name('BriefClinicHistory.update');

    //Analisis Quimicos
    Route::get('/patient/{slug}/create/ChemicalAnalysis', 'ChemicalAnalysisController@create')->name('ChemicalAnalysis.create');

    //Stores y Updates Analisis Bioquímicos
    Route::post('/patient/{slug}/ChemicalAnalysis/created', 'ChemicalAnalysisController@bloodChemistryStore')->name('bloodChemistry.store');
    Route::put('/patient/{slug}/ChemicalAnalysis/updated', 'ChemicalAnalysisController@bloodChemistryUpdate')->name('bloodChemistry.update');
    Route::post('/patient/{slug}/HematicBiometry/created', 'ChemicalAnalysisController@hematicBiometryStore')->name('hematicBiometry.store');
    Route::put('/patient/{slug}/HematicBiometry/updated', 'ChemicalAnalysisController@hematicBiometryUpdate')->name('hematicBiometry.update');
    Route::post('/patient/{slug}/VitaminMineral/created', 'ChemicalAnalysisController@vitaminMineralStore')->name('vitaminMineral.store');
    Route::put('/patient/{slug}/VitaminMineral/updated', 'ChemicalAnalysisController@vitaminMineralUpdate')->name('vitaminMineral.update');
    Route::post('/patient/{slug}/LipidProfile/created', 'ChemicalAnalysisController@lipidProfileStore')->name('lipidProfile.store');
    Route::put('/patient/{slug}/LipidProfile/updated', 'ChemicalAnalysisController@lipidProfileUpdate')->name('lipidProfile.update');
    Route::post('/patient/{slug}/ThyroidProfile/created', 'ChemicalAnalysisController@thyroidProfileStore')->name('thyroidProfile.store');
    Route::put('/patient/{slug}/ThyroidProfile/updated', 'ChemicalAnalysisController@thyroidProfileUpdate')->name('thyroidProfile.update');
    Route::post('/patient/{slug}/Urine/created', 'ChemicalAnalysisController@urineStore')->name('urine.store');
    Route::put('/patient/{slug}/Urine/updated', 'ChemicalAnalysisController@urineUpdate')->name('urine.update');
    Route::post('/patient/{slug}/UrineTest/created', 'ChemicalAnalysisController@urineTestStore')->name('urineTest.store');
    Route::put('/patient/{slug}/UrineTest/updated', 'ChemicalAnalysisController@urineTestUpdate')->name('urineTest.update');

    //Historia Clínica Nutricional
    Route::get('/patient/{slug}/NutritionalClinicalHistory/create', 'NutritionalClinicalHistoryController@create')->name('NutritionalClinicalHistory.create');
    Route::get('/patient/{slug}/NutritionalClinicalHistory/edit', 'NutritionalClinicalHistoryController@edit')->name('NutritionalClinicalHistory.edit');
    Route::post('patinet/{slug}/NutritionalClinicalHistory/created', 'NutritionalClinicalHistoryController@store')->name('NutritionalClinicalHistory.store');
    Route::put('patinet/{slug}/NutritionalClinicalHistory/updated', 'NutritionalClinicalHistoryController@update')->name('NutritionalClinicalHistory.update');
    Route::get('/patient/{slug}/FrequencyConsumption/create', 'NutritionalClinicalHistoryController@frequencyConsumptionCreate')->name('frequencyConsumption.create');
    Route::get('/patient/{slug}/FrequencyConsumption/edit', 'NutritionalClinicalHistoryController@frequencyConsumptionEdit')->name('frequencyConsumption.edit');
    Route::delete('/FrequencyConsumption/delete/{id}', 'NutritionalClinicalHistoryController@frequencyConsumptionDelete')->name('frequencyConsumption.delete');

    //ChartJS
    Route::get('/patient/{slug}/frequencyConsumption/Graphic', 'ChartController@show')->name('chart.show');

    Route::post('/patient/{slug}/frequencyConsumption', 'NutritionalClinicalHistoryController@test')->name('test');

    //Registro de alimentos
    Route::get('/foods', 'FoodController@index')->name('food.index');
    Route::post('/foodgroup/created', 'FoodController@storeFoodGroup')->name('foodGroup.store');
    Route::post('/food/created', 'FoodController@storeFood')->name('food.store');

    //Signos Vitales
    Route::get('/patient/{slug}/create/VitalSigns', 'VitalSignsController@create')->name('VitalSigns.create');
    Route::post('/patient/{slug}/VitalSigns/created', 'VitalSignsController@store')->name('VitalSigns.store');
    Route::get('/patient/{slug}/VitalSigns/edit', 'VitalSignsController@edit')->name('VitalSigns.edit');
    Route::put('/patient/{slug}/VitalSigns/updated', 'VitalSignsController@update')->name('VitalSigns.update');

    //Peticion de inicio de sesión en gmail (Google Calendar)
    Route::post('/google-calendar/connect/{slug}', 'CalendarController@store')->name('oauth.calendar');
    Route::get('/oauth', 'CalendarController@oauth')->name('oauthCallback');

    // Crud nutriologos
    Route::get('/nutritionists', 'NutritionistController@index')->name('nutritionists.index');
    Route::put('/nutritionists/update/status/{slug}', 'NutritionistController@update')->name('nutritionists.update');

    //Routes axios
    Route::post('/frequencyConsumption/add', 'NutritionalClinicalHistoryController@frequencyConsumptionAdd')->name('frequencyConsumption.store');
    Route::delete('/frequencyConsumption/delete/{id}', 'NutritionalClinicalHistoryController@frequencyConsumptionDelete')->name('frequencyConsumption.delete');

});
