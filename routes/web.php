<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\SousFamilleController;
use App\Http\Controllers\MarquesController;
use App\Http\Controllers\UnitesController;
use App\Http\Controllers\EtatsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('familles', FamilleController::class);
Route::resource('sous_familles', SousFamilleController::class);
Route::resource('marques', MarquesController::class);
Route::resource('unites', UnitesController::class);
Route::resource('etats', EtatsController::class);
Route::get('/home', [HomeController::class, 'index'])->name('Homes.Home');
Route::resource('produits', ProduitsController::class);