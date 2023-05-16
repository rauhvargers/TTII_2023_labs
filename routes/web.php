<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ManufacturerController;

Route::redirect('/', 'country');
Route::resource('country', CountryController::class);

Route::resource('manufacturer', ManufacturerController::class, ['except' => ['index', 'create']]);
Route::get('{countryslug}/manufacturer', [ManufacturerController::class, 'index']);
Route::get('{countryslug}/manufacturer/create', [ManufacturerController::class, 'create']);
