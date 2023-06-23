<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsletterController;

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

Route::get('/', [PostController::class, 'index']); 
Route::get('/detail/{post}', [PostController::class, 'detailPost']);
Route::get('/search', [PostController::class, 'search'])->name('search');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

