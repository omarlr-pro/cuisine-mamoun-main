<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('clients', ClientController::class);
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/users', [UserController::class, 'showUsers'])->name('users.index');
    Route::get('/add-user', [UserController::class, 'create'])->name('users.create');
    Route::post('/add-user', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/update/{id}', [UserController::class, 'edit'])->name('users.edit');




});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    
});





Route::fallback(function () {
    return redirect()->route('clients.index');
});