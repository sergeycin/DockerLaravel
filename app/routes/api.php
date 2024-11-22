<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/players', [PlayerController::class,'index'])->name('player.index');
Route::post('/players', [PlayerController::class,'store'])->name('player.store');
Route::get('/players/{player}', [PlayerController::class,'show'])->name('player.show');
Route::put('/players/{player}', [PlayerController::class,'update'])->name('player.update');
Route::delete('/players/{player}', [PlayerController::class,'destroy'])->name('player.destroy');