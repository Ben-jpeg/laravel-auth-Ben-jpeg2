<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/movies');
});

// Route::get('/movies', [MoviesController::class, 'index']);
// Route::post('/movies', [MoviesController::class, 'store']);
// Route::get('/movies/create', [MoviesController::class, 'create'])->name('movies.create');
// Route::get('/movies/{id}', [MoviesController::class, 'show']);
// Route::patch('/movies/{id}', [MoviesController::class, 'update']);
// Route::delete('/movies/{id}', [MoviesController::class, 'destroy']);
// Route::get('/movies/{id}/edit', [MoviesController::class, 'edit'])->name('movies.edit');




Route::resource('/movies', MoviesController::class);

// Pre laravel 8 :
// Route::get('/', 'AppController@index');
