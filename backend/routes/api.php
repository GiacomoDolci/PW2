<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinazioneController;
use App\Http\Controllers\AttrazioneController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rotte per le destinazioni
Route::get('/destinazioni', [DestinazioneController::class, 'index']);
Route::get('/destinazioni/{id}', [DestinazioneController::class, 'show']);

// Rotte per le attrazioni
Route::get('/attrazioni', [AttrazioneController::class, 'index']);
Route::get('/attrazioni/{id}', [AttrazioneController::class, 'show']);
