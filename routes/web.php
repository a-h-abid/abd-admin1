<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\DashboardController;

Route::get('/', [Auth\LoginController::class, 'index']);
Route::get('dashboard', [DashboardController::class, 'index']);
