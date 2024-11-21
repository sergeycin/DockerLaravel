<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/players', [PlayerController::class,'index'])->name('player.index');
Route::post('/players', [PlayerController::class,'store'])->name('player.store');
Route::get('/players/{player}', [PlayerController::class,'show'])->name('player.show');
Route::put('/players/{player}', [PlayerController::class,'update'])->name('player.update');
Route::delete('/players/{player}', [PlayerController::class,'destroy'])->name('player.destroy');