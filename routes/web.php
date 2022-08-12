<?php

use App\Http\Controllers\Auth\PatientAuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PatientProfileController;
use Illuminate\Support\Facades\Route;


// Frontend controller
Route::get('/', [ FrontendController::class, 'showHomePage' ]) -> name('home.page');    
Route::get('/login', [ FrontendController::class, 'showLoginPage' ]) -> name('login.page') -> middleware( 'admin.redirect' );    

// Patient pages
Route::get('/patient-register', [ FrontendController::class, 'showPatientRegisterPage' ]) -> name('patient.reg.page') -> middleware( 'admin.redirect' );    
Route::get('/patient-dashboard', [ FrontendController::class, 'showPatientDashPage' ]) -> name('patient.dash.page') -> middleware('admin');  
Route::get('/patient-settings', [ PatientProfileController::class, 'showPatientSettingsPage' ]) -> name('patient.settings.page') -> middleware('admin');  
Route::get('/patient-password', [ PatientProfileController::class, 'showPatientPasswordPage' ]) -> name('patient.password.page') -> middleware('admin');
Route::post('/patient-passwordUpdated', [ PatientProfileController::class, 'patientPasswordChange' ]) -> name('patient.password.change') -> middleware('admin');

Route::post('/patient-register', [ PatientAuthController::class, 'register' ]) -> name('patient.register');
Route::post('/patient-login', [ PatientAuthController::class, 'login' ]) -> name('patient.login');
Route::get('/patient-logout', [ PatientAuthController::class, 'logout' ]) -> name('patient.logout');


// Doctor pages
Route::get('/doctor-register', [ FrontendController::class, 'showDoctorRegisterPage' ]) -> name('doctor.reg.page');    
Route::get('/doctor-dashboard', [ FrontendController::class, 'showDoctorDashPage' ]) -> name('doctor.dash.page'); 






















