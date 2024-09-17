<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::post('register', [RegisteredUserController::class, 'store'])
        ->name('register');

    Route::get('inicio', [AuthenticatedSessionController::class, 'create'])
        ->name('inicio');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])
        ->name('login');

    Route::get('olvido-contrasena', [NewPasswordController::class, 'create'])
        ->name('olvido-contrasena');

    Route::post('olvido-contrasena', [NewPasswordController::class, 'store'])
        ->name('olvido-contra');
});

Route::middleware('auth')->group(function () {

    Route::get('viajes', function () {
        return view("viajes.cuenta-iniciada");
    })->name('viajes-iniciada');

    Route::get('actividad', [ProfileController::class, 'activities'])->name('actividad');

    Route::post('viajes/pago/opcion', [PaymentController::class, 'options'])
    ->name('pago');

    Route::post('viajes/disfrute', [TravelController::class, "end"])
    ->name('disfrute');

    Route::post('viajes/pago/tarjeta', [PaymentController::class, 'card'])->name('tarjeta');

    Route::post('viajes/choferes', [TravelController::class, 'choferes'])
    ->name('pago-opcion');

    Route::post('viajes/review', [TravelController::class, 'review'])->name('resena');

    Route::post('pay', [PaymentController::class, 'pay'])->name('paying');

    Route::get('viajes/finalizado', [PaymentController::class, 'finished']);

    Route::get('nueva-contrasena', [PasswordResetLinkController::class, 'create'])
        ->name('gestionar-cuenta');

    Route::post('nueva-contrasena', [PasswordResetLinkController::class, 'store'])
        ->name('nueva-contra');

    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
