<?php

use App\Http\Controllers\ScenarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ScenarioController::class, 'index'])->name('home');

Route::resource('scenarios', ScenarioController::class);
