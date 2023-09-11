<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataTypeController;
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
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/emails', [UserController::class, 'emails'])->name('user.emails');
    Route::get('/user/jsonIndex', [UserController::class, 'jsonIndex'])->name('user.jsonIndex');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user/{user}',[UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}',[UserController::class, 'destroy'])->name('user.destroy');
    Route::post('/user/{user}/avatar',[UserController::class, 'storeAvatar'])->name('user.avatar.store');

    Route::get('/datatype', [DataTypeController::class, 'index'])->name('datatype.index');
    Route::get('/datatype/{datatype}', [DataTypeController::class, 'show'])->name('datatype.show');
    Route::get('/datatype/{datatype}/edit', [DataTypeController::class, 'edit'])->name('datatype.edit');
    Route::patch('/datatype/{datatype}',[DataTypeController::class, 'update'])->name('datatype.update');
    Route::delete('/datatype/{datatype}',[DataTypeController::class, 'destroy'])->name('datatype.destroy');
});
