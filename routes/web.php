<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Frontend controller
Route::get('/', [ FrontendController::class, 'showHomePage' ]) -> name('home.page');    
Route::get('/login', [ FrontendController::class, 'showLoginPage' ]) -> name('login.page');    

// Patient pages
Route::get('/patient-register', [ FrontendController::class, 'showPatientRegisterPage' ]) -> name('patient.reg.page');    
Route::get('/patient-dashboard', [ FrontendController::class, 'showPatientDashPage' ]) -> name('patient.dash.page');    

// Doctor pages
Route::get('/doctor-register', [ FrontendController::class, 'showDoctorRegisterPage' ]) -> name('doctor.reg.page');    
Route::get('/doctor-dashboard', [ FrontendController::class, 'showDoctorDashPage' ]) -> name('doctor.dash.page'); 

//Route declaration for laravel








