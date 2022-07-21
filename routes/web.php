<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/artikel', [App\Http\Controllers\ArticlePublicController::class, 'index'])->name('article-public');

Auth::routes();

Route::group(['middleware' => 'auth'],function () {
        Route::group(['prefix' => 'admin-page'], function () {
            Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

            // -------- product -----------
            Route::group(['prefix' => 'product'], function () {
                Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
                Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create-product');
                Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store-product');
                Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit-product');
                Route::put('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update-product');
                Route::delete('/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy-product');
            });

            // -------- article -----------
            Route::group(['prefix' => 'article'], function () {
                Route::get('/', [App\Http\Controllers\ArticleController::class, 'index'])->name('article');
                Route::get('/create', [App\Http\Controllers\ArticleController::class, 'create'])->name('create-article');
                Route::post('/store', [App\Http\Controllers\ArticleController::class, 'store'])->name('store-article');
                Route::delete('/destroy/{id}', [App\Http\Controllers\ArticleController::class, 'destroy'])->name('destroy-article');
            });

            // -------- category article -----------
            Route::group(['prefix' => 'category'], function () {
                Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
                Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create-category');
                Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('store-category');
            });
        });
    }
);
