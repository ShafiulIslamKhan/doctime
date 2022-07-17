<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Frontend controller
Route::get('/', [ FrontendController::class, 'showHomePage' ]) -> name('home.page');

