<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
//Admin route
Route::prefix('admin')->middleware('admin')->group (function(){
    Route::get('/',[HomeController::class, 'index'])->name('admin.home');
    Route::get('/users', [HomeController::class, 'index'])->name('admin.user'); 
});
//user route
Route::prefix('user')->middleware('user')->group (function(){
    Route::get('/',[UserController::class, 'index'])->name('home');
});
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
