<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SessionsController;

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
    return view('articles');
});

Route::get('articles', [ArticleController::class, 'getAllArticles']);
Route::get('article/{id}', [ArticleController::class, 'getArticleById']);
Route::get('articles/new-article', [ArticleController::class, 'createArticle']);

Route::get('/signup', [SignupController::class, 'create'])->name('signup.create')->middleware('guest');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store')->middleware('guest');

Route::get('/login', [SessionsController::class, 'login'])->name('login')->middleware('guest');
Route::post('/session', [SessionsController::class, 'store'])->name('session');
Route::post('/logout', [SessionsController::class, 'destroy'])->name('logout')->middleware('auth');