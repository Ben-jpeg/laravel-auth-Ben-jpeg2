<?php

use App\Http\Controllers\ActorAPIController;
use App\Http\Controllers\DirectorAPIController;
use App\Http\Controllers\MovieAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Les paramètres de nos routes s'appelle {movie} pour le "route model binding"
Route::apiResources([
    'movies' => MovieAPIController::class,
    'actors' => ActorAPIController::class,
    'directors' => DirectorAPIController::class,
]);

Route::get('/movies/{movie}/actors', [MovieAPIController::class, 'actors'])->name('movies.actors');
Route::post('/movies/{movie}/actors', [MovieAPIController::class, 'addActor'])->name('movies.actors.add');

Route::get('/movies/{movie}/director', [MovieAPIController::class, 'director'])->name('movies.director');
