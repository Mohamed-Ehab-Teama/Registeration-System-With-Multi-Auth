<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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


// ================================     User Routes     ==================================== //
Route::controller(UserController::class)
    ->prefix('user')
    ->name('user.')
    ->middleware('auth')
    ->group(function () {
        route::get('/home', 'dash')->name('home');
    });
require __DIR__ . '/auth.php';




// ================================     Admin Routes     ==================================== //
Route::prefix('admins')
    ->name('admins.')
    ->group(function () {

        Route::view('/admin-dashboard', 'admin-dashboard.index')->name('dashboard')
            ->middleware('admin');

        // ======================   Admins  ============================================== //
        Route::resource('admins', AdminController::class)->middleware('admin');

        // ======================   Users  ============================================== //
        Route::resource('users', UserController::class)->middleware('admin');

        // ======================   Roles  ============================================== //
        Route::resource('roles', RoleController::class)->middleware('admin');

        require __DIR__ . '/adminAuth.php';
    });



Route::get('/', function () {
    return view('welcome');
})->name('welcome');
