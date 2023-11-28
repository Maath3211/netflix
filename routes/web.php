<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\UsagersController;

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


Route::get('/',
[FilmsController::class, 'index'])->middleware('auth');

Route::get('/actor',
[PersonnesController::class, 'index'])->name('personnes.index')->middleware('auth');

Route::get('/actor/{personne}',
[PersonnesController::class, 'show'])->name('personnes.show');

Route::get('/createactor',
[PersonnesController::class, 'create'])->name('personnes.create')->middleware('CheckRole:admin');

Route::post('/actorstore',
[PersonnesController::class, 'store'])->name('personnes.store')->middleware('CheckRole:admin');

Route::get('/actors/edit/{personne}',
[PersonnesController::class, 'edit'])->name('personnes.edit')->middleware('CheckRole:admin');

Route::patch('/actors/edit/{personne}',
[PersonnesController::class, 'update'])->name('personnes.patch')->middleware('CheckRole:admin');

Route::delete('/actors/destroy/{personne}',
[PersonnesController::class, 'destroy'])->name('personnes.destroy')->middleware('CheckRole:admin');

Route::get('/relation',
[PersonnesController::class,'relation'])->name('personnes.relation')->middleware('CheckRole:admin');


Route::post('/relation/ajoutRelation',
[PersonnesController::class,'storePersonne'])->name('personnes.storePersonne')->middleware('CheckRole:admin');

Route::get('/get-linkPer/{id}', 
[PersonnesController::class, 'getLink']);

Route::get('/get-linkFilm/{id}', 
[FilmsController::class, 'getLink']);

Route::get('/account',
[UsagersController::class, 'account'])->name('usagers.account')->middleware('auth');

Route::get('/login',
[UsagersController::class, 'index'])->name('login');

Route::post('/login',
[UsagersController::class, 'login']);

Route::post('/logout',
[UsagersController::class, 'logout'])->name('logout');
