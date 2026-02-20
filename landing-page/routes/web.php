<?php

use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/contact-us', [LandingPageController::class, 'contactUs']);
Route::get('/pricing', [LandingPageController::class, 'pricing']);
Route::get('/faq', [LandingPageController::class, 'faq']);
Route::get('/support', [LandingPageController::class, 'support']);
Route::get('/mentions-legales', [LandingPageController::class, 'legalNotice']);
Route::get('/politique-cookies', [LandingPageController::class, 'cookiesPolicy']);
Route::get('/conditions-utilisation', [LandingPageController::class, 'termsOfService']);
Route::get('/politique-confidentialite', [LandingPageController::class, 'privacyPolicy']);
Route::get('/api/landing-page', [LandingPageController::class, 'apiData']);

