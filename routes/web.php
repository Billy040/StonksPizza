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

Route::get('/', [PizzaController::class, 'index'])->name('homepage');
Route::get('homepage', [PizzaController::class, 'index'])->name('homepage');


Route::get('menu', [PizzaController::class, 'menu'])->name('menu');

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
Route::resource('pizza', PizzaController::class)->except('edit');
Route::resource('status', StatusController::class);
Route::resource('winkelwagen', WinkelwagenController::class);

Route::get('winkelwagen', [WinkelwagenController::class, 'index'])->name('winkelwagen');

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::post('register', [KlantController::class, 'register'])->name('register');

Route::post('login', [KlantController::class, 'login'])->name('custom-login-action');

Route::get('/pizza/{id}/edit', [IngredientenController::class, 'edit'])->name('ingredienten.edit');


Route::get('/bestelling/{id}/status', [BestellingController::class, 'status'])->name('bestelling.status');




//winkelwagen
Route::get('winkelwagen', [WinkelwagenController::class, 'index'])->name('winkelwagen.index');
Route::post('winkelwagen/toevoegen/{id}', [WinkelwagenController::class, 'VoegAanWinkelwagen'])->name('winkelwagen.toevoegen');
Route::delete('winkelwagen/verwijderen/{id}', [WinkelwagenController::class, 'VerwijderItem'])->name('winkelwagen.verwijderen');
Route::post('winkelwagen/legen', [WinkelwagenController::class, 'LeegWinkelwagen'])->name('winkelwagen.legen');
Route::post('/winkelwagen/bestellen', [WinkelwagenController::class, 'bestellen'])->name('winkelwagen.bestellen');

require __DIR__.'/auth.php';
