<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailSaleController;
use App\Models\Article;
use App\Models\Role;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('hola');
});

Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/create', [ArticleController::class, 'create']);
Route::post('articles/store',  [ArticleController::class, 'store']);

Route::get('articles/edit/{articleId}', [ArticleController::class, 'edit']);
Route::put('articles/update/{articleId}', [ArticleController::class, 'update']);
Route::delete('articles/delete/{articleId}', [ArticleController::class, 'destroy']);



Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create']);
Route::post('categories/store',  [CategoryController::class, 'store'])->name('categories.store');

Route::get('categories/edit/{categoryId}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/update/{categoryId}', [CategoryController::class, 'update']);
Route::delete('categories/delete/{categoryId}', [CategoryController::class, 'destroy'])->name('categories.delete');;



Route::get('detail-sales', [DetailSaleController::class, 'index'])->name('detail-sales.index');
Route::get('detail-sales/create', [DetailSaleController::class, 'create'])->name('detail-sales.create');
Route::post('detail-sales/store', [DetailSaleController::class, 'store'])->name('detail-sales.store');
Route::get('detail-sales/show/{detailSaleId}', [DetailSaleController::class, 'show'])->name('detail-sales.show');
Route::get('detail-sales/edit/{detailSaleId}', [DetailSaleController::class, 'edit'])->name('detail-sales.edit');
Route::put('detail-sales/update/{detailSaleId}', [DetailSaleController::class, 'update'])->name('detail-sales.update');
Route::delete('detail-sales/delete/{detailSaleId}', [DetailSaleController::class, 'destroy'])->name('detail-sales.destroy');


// Route::get('sales', [DetailSaleController::class, 'index'])->name('sales.index');
// Route::get('sales/create', [DetailSaleController::class, 'create'])->name('sales.create');
// Route::post('sales/store', [DetailSaleController::class, 'store'])->name('sales.store');
// Route::get('sales/show/{detailSaleId}', [DetailSaleController::class, 'show'])->name('sales.show');
// Route::get('sales/edit/{detailSaleId}', [DetailSaleController::class, 'edit'])->name('sales.edit');
// Route::put('sales/update/{detailSaleId}', [DetailSaleController::class, 'update'])->name('sales.update');
// Route::delete('sales/delete/{detailSaleId}', [DetailSaleController::class, 'destroy'])->name('sales.destroy');


Route::controller(DetailSaleController::class)->group(function(){

Route::get('sales', 'index')->name('sales.index');
Route::get('sales/create', 'create')->name('sales.create');
Route::post('sales/store', 'store')->name('sales.store');
Route::get('sales/show/{detailSaleId}', 'show')->name('sales.show');
Route::get('sales/edit/{detailSaleId}', 'edit')->name('sales.edit');
Route::put('sales/update/{detailSaleId}',  'update')->name('sales.update');
Route::delete('sales/delete/{detailSaleId}', 'destroy')->name('sales.destroy');
});