<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('uber');
})->name('uber');

Route::get('/quienes-somos', function () {
    return view('uber.quienes-somos');
})->name('quienes-somos');

Route::get('/preguntas-frecuentes', function () {
    return view('uber.preguntas-frecuentes');
})->name('preguntas-frecuentes');

Route::get('/terminos-condiciones', function () {
    return view('uber.terminos-condiciones');
})->name('terminos-condiciones');

Route::get('/registro/google', function() {
    return view('auth.google');
})->name('google');

Route::get('/registro/apple', function() {
    return view('auth.apple');
})->name('apple');

Route::get('/registro/celular', function() {
    return view('auth.celular');
})->name('celular');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
