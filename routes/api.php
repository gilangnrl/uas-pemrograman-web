<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('register', [\App\Http\Controllers\API\AuthController::class, 'register']);
        Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'login']);
        Route::post('logout', [\App\Http\Controllers\API\AuthController::class, 'logout']);
        Route::post('refresh', [\App\Http\Controllers\API\AuthController::class, 'refresh']);
        Route::post('me', [\App\Http\Controllers\API\AuthController::class, 'me']);
    });

    Route::group(['middleware' => 'jwt.verify'], function () {
        Route::group(['prefix' => 'admin'], function () {
            Route::group(['prefix' => 'article'], function () {
                Route::get('/', [\App\Http\Controllers\API\ArticleController::class, 'index']);
                Route::post('/add', [\App\Http\Controllers\API\ArticleController::class, 'store']);
                Route::get('/find', [\App\Http\Controllers\API\ArticleController::class, 'show']);
                Route::put('/update', [\App\Http\Controllers\API\ArticleController::class, 'update']);
                Route::delete('/delete', [\App\Http\Controllers\API\ArticleController::class, 'destroy']);
            });
            Route::group(['prefix' => 'product'], function () {
                Route::get('/', [\App\Http\Controllers\API\ProductController::class, 'index']);
                Route::post('/add', [\App\Http\Controllers\API\ProductController::class, 'store']);
                Route::get('/find', [\App\Http\Controllers\API\ProductController::class, 'show']);
                Route::put('/update', [\App\Http\Controllers\API\ProductController::class, 'update']);
                Route::delete('/delete', [\App\Http\Controllers\API\ProductController::class, 'destroy']);
            });
        });
    });

    Route::group(['middleware' => 'guest'], function () {
        Route::group(['prefix' => 'public'], function () {
            Route::group(['prefix' => 'article'], function () {
                Route::get('/', [\App\Http\Controllers\API\Guest\ArticleController::class, 'index']);
                Route::get('/{id}', [\App\Http\Controllers\API\Guest\ArticleController::class, 'show']);
            });
        });
    });
});
