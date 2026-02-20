<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Api\Central\TenantController;

Route::get('/landing-page', [LandingPageController::class, 'index']);
Route::prefix('admin')->group(function () {
    // Idéalement, protège cette route avec un middleware 'auth:sanctum' ou une API Key
    Route::post('/tenants', [TenantController::class, 'store']);
});