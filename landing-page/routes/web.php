<?php

use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/contact-us', [LandingPageController::class, 'contactUs']);
Route::get('/faq', [LandingPageController::class, 'faq']);
Route::get('/api/landing-page', [LandingPageController::class, 'apiData']);

