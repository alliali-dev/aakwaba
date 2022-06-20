<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EmailsenderController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index'])->name('home'); //home

// new hotel
Route::get('/hotels.aadhotel', [HotelController::class, 'newhotel'])->middleware(['auth'])->name('newhotel');
// hotel by admin
Route::get('/hotels.addhotelbyadmin', [HotelController::class, 'hotelbyadmin'])->middleware(['auth'])->name('newhotelbyadmin');
Route::get('/hotels', [HotelController::class, 'Hotel'])->name('HOTEL');
// store hotel
Route::post('/hotels', [HotelController::class, 'store'])->name('save');
// liste des hotels
Route::get('/hotels.listehotels', [HotelController::class, 'listehotel'])->name('listhotels');
Route::get('/hotels.listeforcom', [HotelController::class, 'listeforcom'])->name('listeforcom');

// services
Route::get('/services.sevrice', [ServiceController::class, 'create'])->name('service.create'); //creer
Route::get('/services.index', [ServiceController::class, 'index'])->name('service.index'); //liste
Route::post('/services', [ServiceController::class, 'store'])->name('service.save'); //enregistrer

// chambres
Route::get('/chambres.ajout', [ChambreController::class, 'create'])->name('newroom');
Route::get('/chambres', [ChambreController::class, 'store'])->name('saveroom');
Route::get('/chambres.liste', [ChambreController::class, 'liste'])->name('listroom');
// categories
Route::get('/categories.ajout', [CategorieController::class, 'create'])->name('newcategorie');
Route::get('/categories', [CategorieController::class, 'store'])->name('savecategorie');
Route::get('/categories.liste', [CategorieController::class, 'create'])->name('listcategorie');



// Contact
Route::get('/contacts.contact', [ContactController::class, 'contact'])->name('contact');
// envoi du message
Route::post('/contacts', [ContactController::class, 'EmailSend'])->name('sendsms');

//Dashboard

Route::get('/dashboard.dashboarduser', function () {
     return view('dashboard.dashboarduser');
})->middleware(['auth'])->name('commercial');
Route::get('/dashboard.dashboardadmin', function () {
     return view('dashboard.dashboardadmin');
})->middleware(['auth'])->name('boss');

Route::get('/dashboard.dashboard', function () {
     return view('dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard.dashboard', function () {
//      return view('dashboard.dashboard');
// })->name('dashboard');

require __DIR__ . '/auth.php';