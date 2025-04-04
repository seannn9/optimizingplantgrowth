<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SensorsController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/sensors/{apikey}/values', [SensorsController::class, 'insert']);
Route::get('refresh', [SensorsController::class, 'refresh']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [SensorsController::class, 'dashboard'])->name('dashboard');
    Route::get('controls', [SettingsController::class, 'settings'])->name('controls');
    Route::post('controls', [SettingsController::class, 'saveSettings']);
//    Route::get('history', [SensorsController::class, 'history']);
});


require __DIR__ . '/auth.php';
