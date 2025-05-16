<?php

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
Route::prefix('user')->name('user.')->controller(UserController::class)->middleware('auth')
    ->group(function () {
        route::get('/home', 'index')->name('home');
    });
require __DIR__ . '/auth.php';



// Admin
Route::view('/test', 'admin-dashboard.index')->name('test');
Route::view('/test0', 'admin-dashboard.neededcomponents')->name('test');




Route::get('/', function () {
    return view('welcome');
})->name('welcome');
