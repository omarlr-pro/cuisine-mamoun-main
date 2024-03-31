<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RelanceController;
use App\Http\Controllers\EtapeController;
use App\Http\Controllers\RendezVousController;


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
    Route::get('/profil', [UserController::class, 'profil'])->name('profil');
    Route::get('/calendrier', [UserController::class, 'calendrier'])->name('calendrier');
    Route::put('/users/{user}/deactivate', [LoginController::class, 'deactivateUser'])->name('deactivate-user');
    Route::put('/users/{user}/active', [LoginController::class, 'activeuser'])->name('user.activate');



    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/relance', [RelanceController::class, 'store'])->name('relance.store');
    Route::get('/relances/index', [ClientController::class, 'showRelances'])->name('relances.index');
    Route::post('/etape', [EtapeController::class, 'store'])->name('etapes.store');
    Route::get('/rendezvous/rdv_net_non_statuer', [ClientController::class, 'rdvNetNonStatuer'])->name('rendezvous.rdv_net_non_statuer');
    Route::get('/rendezvous/rdv_net_jour_j', [ClientController::class, 'rdvNetJourJ'])->name('rendezvous.rdv_net_jour_j');
    Route::get('/rendezvous/rdv_brut_a_confirmer', [ClientController::class, 'rdvBrutAConfirmer'])->name('rendezvous.rdv_brut_a_confirmer');
});

Route::group(['middleware' => 'guest'], function () { 
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/sign-out', function () {
        return view('sign-out');
    })->name('sign-out');
});







Route::fallback(function () {
    return redirect()->route('clients.index');
});