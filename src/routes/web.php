<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/dashboard/{category}', [CategoryController::class, 'showByName'])
    ->middleware(['auth'])
    ->name('category.show');

Route::view('updates', 'updates')
    ->middleware(['auth', 'verified'])
    ->name('updates');

Route::get('feedbacks', [FeedbackController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('feedbacks');

require __DIR__.'/auth.php';
