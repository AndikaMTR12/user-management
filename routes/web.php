<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index'])->name('sign-in');
Route::get('/sign-up', [AuthController::class, 'registrasi'])->name('sign-up');
Route::post('/auth-login', [AuthController::class, 'authLogin'])->name('auth-login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/user-management', [UserManagementController::class, 'index'])->name('user-management');
