<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganController;
use App\Http\Controllers\HospitalController;

Route::resource('users', UserController::class);
Route::resource('organs', OrganController::class);
Route::resource('hospitals', HospitalController::class);
