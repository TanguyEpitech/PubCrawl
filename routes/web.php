<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\updateUserController;
use App\Http\Controllers\getAnnonceController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AnnonceController;
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

Route::get('/', [\App\Http\Controllers\welcomeController::class, 'index']);

Route::get('/home', function () {
    return view('dashboard');
})->name("home")->middleware(['auth']);
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth', "verified"])->name('dashboard');

Route::get('/updateUser', [updateUserController::class, 'index'])->middleware(['auth'])->name('updateUser');

Route::post('/updateUser', [updateUserController::class, 'update'])->middleware(['auth'])->name('updateUser');

// les annonces
Route::get('/Annonces', [getAnnonceController::class, 'index'])->middleware(['auth'])->name('getAnnonceController');

Route::get('/ajouter', [AnnonceController::class, 'index'])->middleware(['auth', "verified"])->name("ajouter");

Route::post('/ajouter', [AnnonceController::class, 'create'])->middleware(['auth',"verified"])->name("ajouter");


// les bars

Route::get('/registerForPro', [\App\Http\Controllers\adminController::class, "index"])->name("register_pro");
Route::post('/registerForPro', [\App\Http\Controllers\adminController::class, "create"])->name("register_pro");




require __DIR__.'/auth.php';
