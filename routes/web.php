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
        Route::post('/', [MediaController::class, 'store']);
        Route::put('{media:uuid}', [MediaController::class, 'update'])->name('update');
        Route::delete('{media:uuid}', [MediaController::class, 'destroy'])->name('delete');
    });
    // html snippet
    Route::name('htmlSnippet.')->prefix('html-snippets')->group(function () {
        Route::get('/', [HtmlSnippetController::class, 'index'])->name('index');
        Route::get('/create', [HtmlSnippetController::class, 'create'])->name('create');
        Route::post('/create', [HtmlSnippetController::class, 'store'])->name('store');
        Route::get('{htmlSnippet:uuid}', [HtmlSnippetController::class, 'edit'])->name('edit');
        Route::put('{htmlSnippet:uuid}', [HtmlSnippetController::class, 'update'])->name('update');
        Route::delete('{htmlSnippet:uuid}/delete', [HtmlSnippetController::class, 'destroy'])->name('delete');
    });
    // link
    Route::name('link.')->prefix('links')->group(function () {
        Route::get('/', [LinkController::class, 'index'])->name('index');
        Route::post('/', [LinkController::class, 'store']);
        Route::put('{link:uuid}', [LinkController::class, 'update'])->name('update');
        Route::delete('{link:uuid}', [LinkController::class, 'destroy'])->name('delete');
    });
});
