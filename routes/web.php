<?php

use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::get('/posts/{post}/delete', [PostController::class, 'delete'])->name('post.delete');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');