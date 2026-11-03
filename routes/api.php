<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

// Publik: Read All dan Show, bisa diakses tanpa login
Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);
Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);
Route::apiResource('/books', BookController::class)->only(['index', 'show']);

Route::middleware(['auth:api'])->group(function () {

    // Customer: Create, Update, Show transaksi
    Route::middleware(['role:customer'])->group(function () {
        Route::apiResource('/transactions', TransactionController::class)->only(['store', 'show', 'update']);
    });

    // Admin: Create, Update, Destroy data buku dkk, dan Read All, Destroy transaksi
    Route::middleware(['role:admin'])->group(function () {
        Route::apiResource('/genres', GenreController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/authors', AuthorController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/books', BookController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/transactions', TransactionController::class)->only(['index', 'destroy']);
    });
});