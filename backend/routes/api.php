<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/landing-page', [LandingPageController::class, 'index']);
