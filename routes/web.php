<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\ScenarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ScenarioController::class, 'index'])->name('home');

Route::resource('scenarios', ScenarioController::class);

Route::prefix('scenarios/{scenario}/assets')->controller(AssetController::class)->name('assets.')->group(function() {
    Route::get('/create', 'create')->name('create');
});
