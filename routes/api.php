<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/articles', [ArticleController::class, 'store']);
// Route::put('/update/{id}', [ArticleController::class, 'update']);
// Route::get('/test', [ArticleController::class, 'index']);


// Route::prefix('articles')->group(function () {
//     Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
//     Route::post('/', [ArticleController::class, 'store'])->name('articles.store');
//     Route::put('/{id}', [ArticleController::class, 'update'])->name('articles.update');
//     Route::delete('/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
// });

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');
Route::patch('/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::post('update/{id}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
