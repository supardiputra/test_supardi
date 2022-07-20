<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/phpinfo', [DashboardController::class, 'phpinfo'])->name('phpinfo');
Route::group(
    [
        'prefix'     => 'login'
    ],
    function () {
        Route::post('/proses', [LoginController::class, 'authenticate'])->name('login.proses');
        Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
    }
);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::resource('user', UsersController::class);
        Route::get('/profile/{id}', [UsersController::class, 'profile'])->name('user.profile');
        Route::patch('/update_profile/{id}', [UsersController::class, 'update_profile'])->name('user.update_profile');
    }
);
