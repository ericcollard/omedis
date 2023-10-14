<?php

use App\Http\Controllers\API\ApiProductController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\OdooModelController;
use App\Http\Controllers\OdooProductValueController;
use App\Http\Controllers\OdooVariantValueController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VariantController;
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

Route::get('/', function () {   return view('dashboard');  })->name('home');
Route::get('/dashboard', function () {   return view('dashboard');  })->name('dashboard');
Route::get('/documentation', function () {   return view('documentation');  })->name('documentation');

Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/user/emails', [UserController::class, 'emails'])->name('user.emails')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/user/jsonIndex', [UserController::class, 'jsonIndex'])->name('user.jsonIndex')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::patch('/user/{user}',[UserController::class, 'update'])->name('user.update')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::delete('/user/{user}',[UserController::class, 'destroy'])->name('user.destroy')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::post('/user/{user}/avatar',[UserController::class, 'storeAvatar'])->name('user.avatar.store')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);

Route::get('/datatype', [DataTypeController::class, 'index'])->name('datatype.index');
Route::get('/datatype/create', [DataTypeController::class, 'create'])->name('datatype.create')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/datatype/{datatype}', [DataTypeController::class, 'show'])->name('datatype.show');
Route::get('/datatype/{datatype}/edit', [DataTypeController::class, 'edit'])->name('datatype.edit')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::patch('/datatype/{datatype}',[DataTypeController::class, 'update'])->name('datatype.update')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::delete('/datatype/{datatype}',[DataTypeController::class, 'destroy'])->name('datatype.destroy')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::post('/datatype',[DataTypeController::class, 'store'])->name('datatype.store')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);

Route::get('/unit', [UnitController::class, 'index'])->name('unit.index');
Route::get('/unit/create', [UnitController::class, 'create'])->name('unit.create')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/unit/{unit}', [UnitController::class, 'show'])->name('unit.show');
Route::get('/unit/{unit}/edit', [UnitController::class, 'edit'])->name('unit.edit')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::patch('/unit/{unit}',[UnitController::class, 'update'])->name('unit.update')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::delete('/unit/{unit}',[UnitController::class, 'destroy'])->name('unit.destroy')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::post('/unit',[UnitController::class, 'store'])->name('unit.store')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);

Route::get('/attribute', [AttributeController::class, 'index'])->name('attribute.index');
Route::get('/attribute/todo', [AttributeController::class, 'todo'])->name('attribute.todo');
Route::get('/attribute/create', [AttributeController::class, 'create'])->name('attribute.create')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/attribute/{attribute}', [AttributeController::class, 'show'])->name('attribute.show');
Route::get('/attribute/{attribute}/edit', [AttributeController::class, 'edit'])->name('attribute.edit')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/attribute/{attribute}/duplicate', [AttributeController::class, 'duplicate'])->name('attribute.duplicate')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::patch('/attribute/{attribute}',[AttributeController::class, 'update'])->name('attribute.update')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::delete('/attribute/{attribute}',[AttributeController::class, 'destroy'])->name('attribute.destroy')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::post('/attribute',[AttributeController::class, 'store'])->name('attribute.store')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);

Route::get('/attributelist', [AttributeListController::class, 'index'])->name('attributelist.index');
Route::get('/attributelist/create', [AttributeListController::class, 'create'])->name('attributelist.create')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/attributelist/colors', [AttributeListController::class, 'colors'])->name('attributelist.colors');
Route::get('/attributelist/brands', [AttributeListController::class, 'brands'])->name('attributelist.brands');
Route::get('/attributelist/categories', [AttributeListController::class, 'categories'])->name('attributelist.categories');
Route::get('/attributelist/{attributelist}', [AttributeListController::class, 'show'])->name('attributelist.show');
Route::get('/attributelist/{attributelist}/edit', [AttributeListController::class, 'edit'])->name('attributelist.edit')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::patch('/attributelist/{attributelist}',[AttributeListController::class, 'update'])->name('attributelist.update')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::delete('/attributelist/{attributelist}',[AttributeListController::class, 'destroy'])->name('attributelist.destroy')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::post('/attributelist',[AttributeListController::class, 'store'])->name('attributelist.store')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);

// attributelistvalue avec paramètre optionnel pour transmettre le contexte
Route::get('attributelistvalue/show/{attributelistvalue}', [AttributeListValueController::class, 'show'])->name('attributelistvalue.show');
Route::get('attributelistvalue/{attributelistvalue}/edit/{attributelist?}', [AttributeListValueController::class, 'edit'])->name('attributelistvalue.edit')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('attributelistvalue/create/{attributelist?}', [AttributeListValueController::class, 'create'])->name('attributelistvalue.create')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('attributelistvalue/{attributelist?}', [AttributeListValueController::class, 'index'])->name('attributelistvalue.index');
Route::patch('attributelistvalue/{attributelistvalue}/{attributelist?}',[AttributeListValueController::class, 'update'])->name('attributelistvalue.update')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::post('attributelistvalue/{attributelist?}',[AttributeListValueController::class, 'store'])->name('attributelistvalue.store')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::delete('attributelistvalue/{attributelistvalue}/{attributelist?}',[AttributeListValueController::class, 'destroy'])->name('attributelistvalue.destroy')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);

Route::get('variant', [VariantController::class, 'index'])->name('variant.index');
Route::post('variant/decodecsv', [VariantController::class, 'decodecsv'])->name('variant.decodecsv')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::post('variant/decodexml', [VariantController::class, 'decodexml'])->name('variant.decodexml')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('variant/uploadcsv', [VariantController::class, 'uploadcsv'])->name('variant.uploadcsv')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('variant/uploadxml', [VariantController::class, 'uploadxml'])->name('variant.uploadxml')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('variant/truncate', [VariantController::class, 'truncate'])->name('variant.truncate')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('variant/{variant}/convert2odoo', [VariantController::class, 'convert2odoo'])->name('variant.convert2odoo');
Route::get('variant/{variant}', [VariantController::class, 'show'])->name('variant.show');

Route::get('history', [HistoryController::class, 'index'])->name('history.index');

Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('product/truncate', [ProductController::class, 'truncate'])->name('product.truncate')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('product/{product}/convert2odoo', [ProductController::class, 'convert2odoo'])->name('product.convert2odoo');
Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');

Route::resource('odoomodel', OdooModelController::class);
Route::resource('odooproductvalue', OdooProductValueController::class);
Route::resource('odoovariantvalue', OdooVariantValueController::class);
Route::get('/odoomodel/{odoomodel}/duplicate', [OdooModelController::class, 'duplicate'])->name('odoomodel.duplicate')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/odooproductvalue/{odooproductvalue}/duplicate', [OdooProductValueController::class, 'duplicate'])->name('odooproductvalue.duplicate')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);
Route::get('/odoovariantvalue/{odoovariantvalue}/duplicate', [OdooVariantValueController::class, 'duplicate'])->name('odoovariantvalue.duplicate')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',]);


Route::apiResource("api/products", ApiProductController::class);

