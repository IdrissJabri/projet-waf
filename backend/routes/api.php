<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VilleController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Authcontroller;

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


Route::get('/voyage', [VoyageController::class, 'index']);
Route::get('/ville', [VilleController::class, 'index']);



Route::post('agence/upload', [AgenceController::class, 'upload']);
Route::get('voyage/search/{id}', [VoyageController::class, 'show']);

Route::any('/reserver', [ReservationController::class, 'reserver']);
Route::post('/reserverguest', [ReservationController::class, 'reserverGuest']);
// AUTHENTIFICATION

Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/createGuest', [AuthController::class, 'createGuest']);
