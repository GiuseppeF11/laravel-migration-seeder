<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\TrainController;

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

//Index recupera tutti gli elementi di questo dato
Route::get('/trains', [TrainController::class, 'index'])->name('trains.index');

//Index recupera il singolo elemento
Route::get('/trains/{id}', [TrainController::class, 'show'])->name('trains.show');


// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
