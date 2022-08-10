<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\Argument;
// use App\Facades\Swapi;
use Facades\App\Services\Swapi; // Version courte pour transformer une classe en facade

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

Route::get('/', [MainController::class, 'index'])->name('index');

Route::post('/newsletter', [MainController::class, 'newsletter'])->name('newsletter');


Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'create']);
    Route::get('/login', [SessionsController::class, 'index'])->name('login');
    Route::post('/login', [SessionsController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    // AUTH
    Route::post('/logout', [SessionsController::class, 'logout']);
    Route::get('/profile', [UsersController::class, 'index']);
});


Route::middleware(['auth', 'admin'])->group(function () {
    // AUTH
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/api/keys/generate', [AdminController::class, 'setApiKey'])->name('api-key.generate');
    Route::delete('/api/keys/remove', [AdminController::class, 'removeApiKey'])->name('api-key.remove');
});


Route::get('/swapi', function (Swapi $swapi) {
    // return Swapi::films()->search('sith')->get();

    dd($swapi);
    return $swapi::people()->page(2)->wookiee()->get();
});




// Route::get('/db', function () {
// Création d'une entrée
// $argument = new Argument();
// $argument->title = 'Lorem ipsum';
// $argument->body = 'Bonjour à tous !';
// $argument->save();

// $arguments = Argument::all();
// dd($arguments);

// $argument = Argument::find(3);
// dd($argument, $argument->title);
// });
