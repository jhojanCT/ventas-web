<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailEntryController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\DetailSaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;




Route::get('/', function () {
    return view('welcome');
});



// Rutas para usuarios
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

// Rutas para ventas
Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
Route::get('/sales/create', [SaleController::class, 'create'])->name('sales.create');
Route::post('/sales', [SaleController::class, 'store'])->name('sales.store');
Route::get('/sales/{sale}', [SaleController::class, 'show'])->name('sales.show');
Route::get('/sales/{sale}/edit', [SaleController::class, 'edit'])->name('sales.edit');
Route::put('/sales/{sale}', [SaleController::class, 'update'])->name('sales.update');
Route::delete('/sales/{sale}', [SaleController::class, 'destroy'])->name('sales.destroy');

// Rutas para detalles de venta
Route::get('/detail-sales', [DetailSaleController::class, 'index'])->name('detail-sales.index');
Route::get('/detail-sales/create', [DetailSaleController::class, 'create'])->name('detail-sales.create');
Route::post('/detail-sales', [DetailSaleController::class, 'store'])->name('detail-sales.store');
Route::get('/detail-sales/{detailSale}', [DetailSaleController::class, 'show'])->name('detail-sales.show');
Route::get('/detail-sales/{detailSale}/edit', [DetailSaleController::class, 'edit'])->name('detail-sales.edit');
Route::put('/detail-sales/{detailSale}', [DetailSaleController::class, 'update'])->name('detail-sales.update');
Route::delete('/detail-sales/{detailSale}', [DetailSaleController::class, 'destroy'])->name('detail-sales.destroy');


// Rutas para categorías
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


// Rutas para artículos
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');


//Rutas para entradas
Route::get('/entries', [EntryController::class, 'index'])->name('entries.index');
Route::get('/entries/create', [EntryController::class, 'create'])->name('entries.create');
Route::post('/entries', [EntryController::class, 'store'])->name('entries.store');
Route::get('/entries/{id}', [EntryController::class, 'show'])->name('entries.show');
Route::get('/entries/{id}/edit', [EntryController::class, 'edit'])->name('entries.edit');
Route::put('/entries/{id}', [EntryController::class, 'update'])->name('entries.update');
Route::delete('/entries/{id}', [EntryController::class, 'destroy'])->name('entries.destroy');

//Rutas para detalles entradas
Route::get('/detailEntries', [DetailEntryController::class, 'index'])->name('detailEntries.index');
Route::get('/detailEntries/create', [DetailEntryController::class, 'create'])->name('detailEntries.create');
Route::post('/detailEntries', [DetailEntryController::class, 'store'])->name('detailEntries.store');
Route::get('/detailEntries/{id}', [DetailEntryController::class, 'show'])->name('detailEntries.show');
Route::get('/detailEntries/{id}/edit', [DetailEntryController::class, 'edit'])->name('detailEntries.edit');
Route::put('/detailEntries/{id}', [DetailEntryController::class, 'update'])->name('detailEntries.update');
Route::delete('/detailEntries/{id}', [DetailEntryController::class, 'destroy'])->name('detailEntries.destroy');


