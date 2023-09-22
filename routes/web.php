<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataTypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeListValueController;
use App\Http\Controllers\AttributeListController;

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
    Route::get('/datatype/create', [DataTypeController::class, 'create'])->name('datatype.create');
    Route::get('/datatype/{datatype}', [DataTypeController::class, 'show'])->name('datatype.show');
    Route::get('/datatype/{datatype}/edit', [DataTypeController::class, 'edit'])->name('datatype.edit');
    Route::patch('/datatype/{datatype}',[DataTypeController::class, 'update'])->name('datatype.update');
    Route::delete('/datatype/{datatype}',[DataTypeController::class, 'destroy'])->name('datatype.destroy');
    Route::post('/datatype',[DataTypeController::class, 'store'])->name('datatype.store');

    Route::resource('unit', UnitController::class);
    Route::resource('attribute', AttributeController::class);
    Route::resource('attributelist', AttributeListController::class);

    // attributelistvalue avec paramètre optionnel pour transmettre le contexte
    Route::get('attributelistvalue/{attributelistvalue}/edit/{attributelist?}', [AttributeListValueController::class, 'edit'])->name('attributelistvalue.edit');
    Route::get('attributelistvalue/create/{attributelist?}', [AttributeListValueController::class, 'create'])->name('attributelistvalue.create');
    Route::get('attributelistvalue/{attributelist?}', [AttributeListValueController::class, 'index'])->name('attributelistvalue.index');
    Route::patch('attributelistvalue/{attributelistvalue}/{attributelist?}',[AttributeListValueController::class, 'update'])->name('attributelistvalue.update');
    Route::post('attributelistvalue/{attributelist?}',[AttributeListValueController::class, 'store'])->name('attributelistvalue.store');
    Route::delete('attributelistvalue/{attributelistvalue}/{attributelist?}',[AttributeListValueController::class, 'destroy'])->name('attributelistvalue.destroy');
});
