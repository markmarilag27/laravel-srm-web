<?php

use App\Http\Controllers\Admin\HtmlSnippetController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::name('admin.')->prefix('admin')->group(function () {
    // index media
    Route::name('media.')->group(function () {
        Route::get('/', [MediaController::class, 'index'])->name('index');
    });
    // html snippet
    Route::name('htmlSnippet.')->prefix('html-snippets')->group(function () {
        Route::get('/', [HtmlSnippetController::class, 'index'])->name('index');
    });
    // link
    Route::name('link.')->prefix('links')->group(function () {
        Route::get('/', [LinkController::class, 'index'])->name('index');
    });
});
