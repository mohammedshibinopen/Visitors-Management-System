<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginPost'])->name('loginPost');

Route::get('/admin/register', [AuthController::class, 'register'])->name('register');
Route::post('/admin/register', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/admin/dashboard', [AuthController::class, 'getAdminDashboard'])->name('getAdminDashboard');

Route::get('/visitor/acessform', [AuthController::class, 'getAccessForm'])->name('getAccessForm');
