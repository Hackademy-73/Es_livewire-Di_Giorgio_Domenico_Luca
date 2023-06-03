<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/articles', [ArticleController::class, 'index'])->name('show_article');

Route::get('/article/create', [ArticleController::class, 'create'])->name('create_article');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('edit_article');