<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/emails', [UsersController::class, 'emails'])->name('users.emails');
    Route::get('/users/jsonIndex', [UsersController::class, 'jsonIndex'])->name('users.jsonIndex');
    Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{user}',[UsersController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}',[UsersController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/avatar',[UsersController::class, 'storeAvatar'])->name('users.avatar.store');



});
