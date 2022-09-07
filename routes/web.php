<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('auth.login');
})->name('home');

Auth::routes();

Route::get('login', function () {
    return redirect()->route('home');
})->name('login');


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::put('users/{user}/approve', [UserController::class,'approve'])->name('users.approve');
    Route::put('users/{user}/reject', [UserController::class,'reject'])->name('users.reject');
});
