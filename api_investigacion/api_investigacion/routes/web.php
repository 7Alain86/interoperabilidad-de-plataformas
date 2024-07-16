<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/foto_del_dia', [ApiController::class, 'dia'])->name('dia');
Route::get('/aleatorio', [ApiController::class, 'aleatorio'])->name('aleatorio');
Route::get('/foto_por_fecha', function(){ return view('enviar');})->name('enviar');
Route::get('/enviar_fecha', [ApiController::class, 'fecha']) ->name('fecha');
Route::get('/sandbox', [ApiController::class, 'sandbox'])->name('sandbox');

