<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ModuluController;
use App\Http\Controllers\MatrikulatuController;
use App\Http\Controllers\IrakasleController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleIkusi;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('moduluak', ModuluController::class)
    ->except(['show']);

Route::middleware('auth')->get('/ikasleak', [IrakasleController::class, 'index'])->name('ikasleak');

Route::middleware('auth')->get('/moduluak/ikaslea', [MatrikulatuController::class, 'showView'])->name('moduluak.ikaslea');

Route::middleware('auth')->group(function () {
    Route::post('/matrikulatu/{modulo}', [MatrikulatuController::class, 'matrikulatu'])->name('matrikulatu');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

