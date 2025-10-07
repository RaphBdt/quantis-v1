<?php

use App\Http\Controllers\ScenarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('scenario', ScenarioController::class);
