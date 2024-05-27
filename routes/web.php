<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/dashboard', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/input', [ArticleController::class, 'create'])->name('articles.input');
Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::get('/article', [ArticleController::class, 'article'])->name('articles.article');
Route::post('/dashboard', [ArticleController::class, 'store'])->name('articles.store');
// Route::patch('/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::post('/edit/{id}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/dashboard/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/article', function () {
//     return view('admin.article');
// })->middleware(['auth', 'verified'])->name('article');

// Route::get('/input', function () {
//     return view('admin.input');
// })->middleware(['auth', 'verified'])->name('input');


Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::resource('/', HomeController::class);
Route::resource('review', ReviewController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
