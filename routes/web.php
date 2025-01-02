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


Route::get('/', function () {
    return view('welcome');
});

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
Route::resource('klant', KlantController::class);
Route::resource('manager', ManagerController::class);
Route::resource('medewerker', MedewerkerController::class);
Route::resource('pizza', PizzaController::class);
Route::resource('status', StatusController::class);

Route::get('homepage', [PizzaController::class, 'index'])->name('homepage');
Route::get('winkelwagen', [BestellingController::class, 'winkelwagen'])->name('winkelwagen');

require __DIR__.'/auth.php';
