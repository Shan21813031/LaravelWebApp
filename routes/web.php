<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'index'])->middleware(['auth'])->name('post_index');
Route::post('/post', [PostController::class, 'create'])->middleware(['auth'])->name('post_create');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->middleware(['auth'])->name('post_edit');
Route::put('/post/edit/{id}', [PostController::class, 'update'])->middleware(['auth'])->name('post_update');
Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->middleware(['auth'])->name('post_destroy');


Route::get('/dashboard', [Dashboard::class, 'show_post'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
