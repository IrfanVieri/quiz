<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/', action: [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', action: [DashboardController::class, 'index'])->name('admin.dashboard');
