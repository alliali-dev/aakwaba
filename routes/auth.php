<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisterAdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RegisterSuperAdminController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

//formulaire d'enregistrement d'un utilisateur
Route::get('auth', [RegisteredUserController::class, 'create'])
    ->middleware('auth')
    ->name('register');




Route::get('/registeradmin', [RegisterAdminController::class, 'createadmin'])
    ->middleware('auth')
    ->name('registeradmin');

//save admin
Route::post('/registeradmin', [RegisterAdminController::class, 'store'])
    ->middleware('auth')
    ->name('saveadmin');

// form super create admin
Route::get('/registersuper', [RegisterSuperAdminController::class, 'createsuperadmin'])
    ->middleware('auth')
    ->name('registersuper');

// save super admin
Route::post('/registersuperadmin', [RegisterSuperAdminController::class, 'store'])
    ->middleware('auth')
    ->name('savesuper');



//enregistrer un utilisateur
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('auth')
    ->name('saveuser');

//formulaire de connexion
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('web')
    ->name('login');

//lancer la connexion
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('web')->name('sendlogin');


// liste des membres lm
Route::get('/lm', [RegisteredUserController::class, 'utilisateurs'])
    ->middleware('auth')
    ->name('lm');


//formulaire de reinitialisation de mot de pass
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

//de reinitialisation de mot de pass
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

//formulaire de creation de nouveau mot de pass
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

// creation de nouveau mot de pass
Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout1');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');