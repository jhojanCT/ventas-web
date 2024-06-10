<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailEntryController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\SaleController;
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
Route::post('/sales', [UserController::class, 'store'])->name('sales.store');
Route::get('/sales/{id}', [UserController::class, 'show'])->name('sales.show');
Route::get('/sales/{id}/edit', [UserController::class, 'edit'])->name('sales.edit');
Route::put('/sales/{id}', [UserController::class, 'update'])->name('sales.update');
Route::delete('/sales/{id}', [UserController::class, 'destroy'])->name('sales.destroy');

//Rutas para categorias
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//Rutas para articulos
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update'); // Usa {id}
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

//Rutas para entradas
Route::get('/entries', [EntryController::class, 'index'])->name('entries.index');
Route::get('/entries/create', [EntryController::class, 'create'])->name('entries.create');
Route::post('/entries', [EntryController::class, 'store'])->name('entries.store');
Route::get('/entries/{id}', [EntryController::class, 'show'])->name('entries.show');
Route::get('/entries/{id}/edit', [EntryController::class, 'edit'])->name('entries.edit');
Route::put('/entries/{id}', [EntryController::class, 'update'])->name('entries.update');
Route::delete('/entries/{id}', [EntryController::class, 'destroy'])->name('entries.destroy');

//Rutas para detalles entradas
Route::get('/detail_entries', [DetailEntryController::class, 'index'])->name('detail_entries.index');
Route::get('/detail_entries/create', [DetailEntryController::class, 'create'])->name('detail_entries.create');
Route::post('/detail_entries', [DetailEntryController::class, 'store'])->name('detail_entries.store');
Route::get('/detail_entries/{id}', [DetailEntryController::class, 'show'])->name('detail_entries.show');
Route::get('/detail_entries/{id}/edit', [DetailEntryController::class, 'edit'])->name('detail_entries.edit');
Route::put('/detail_entries/{id}', [DetailEntryController::class, 'update'])->name('detail_entries.update');
Route::delete('/detail_entries/{id}', [DetailEntryController::class, 'destroy'])->name('detail_entries.destroy');

//Rutas para
