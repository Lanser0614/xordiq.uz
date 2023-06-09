<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\Merchant\MerchantController;
use App\Http\Controllers\Api\Room\RoomController;
use Illuminate\Support\Facades\Route;

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'getCategories']);
    });

    Route::prefix('merchants')->group(function () {
        Route::post('/', [MerchantController::class, 'store']);
        Route::get('/', [MerchantController::class, 'index']);
        Route::get('/{id}', [MerchantController::class, 'show']);
        Route::post('/{id}', [MerchantController::class, 'update']);
        Route::delete('/{id}', [MerchantController::class, 'delete']);
    });

    Route::prefix('rooms')->group(function () {
        Route::post('/{merchant_id}', [RoomController::class, 'store']);
        Route::get('/{merchant_id}', [RoomController::class, 'index']);
        Route::post('/{merchant_id}/{room_id}', [RoomController::class, 'update']);
        Route::get('/{merchant_id}/{room_id}', [RoomController::class, 'show']);
        Route::delete('/{merchant_id}/{room_id}', [RoomController::class, 'delete']);
    });
