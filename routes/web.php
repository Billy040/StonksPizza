<?php

use App\Http\Controllers\FormaatController;
use App\Http\Controllers\IngredientenController;
use App\Http\Controllers\KlantController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\MedewerkerController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BestellingController;
use App\Http\Controllers\WinkelwagenController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('homepage', [PizzaController::class, 'index'])->name('homepage');

Route::get('menu', [PizzaController::class, 'index'])->name('menu');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('bestelling', BestellingController::class);
Route::resource('formaat', FormaatController::class);
Route::resource('ingredienten', IngredientenController::class);
Route::resource('manager', ManagerController::class);
Route::resource('medewerker', MedewerkerController::class);
Route::resource('pizza', PizzaController::class);
Route::resource('status', StatusController::class);
Route::resource('winkelwagen', WinkelwagenController::class);

Route::get('winkelwagen', [WinkelwagenController::class, 'index'])->name('winkelwagen');

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::post('register', [KlantController::class, 'register'])->name('register');

Route::post('login', [KlantController::class, 'login'])->name('custom-login-action');

require __DIR__.'/auth.php';
