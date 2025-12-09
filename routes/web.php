<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// blog controller 
Route::get('/',[BlogController::class ,'index'])->name('blogs.index');
Route::get('/blog/{blog}',[BlogController::class,'show'])->name('blogs.show');

//
Route::middleware(['auth'])->group(function () {

    Route::post('/favorites/{blog}/toggle', 
        [FavoriteController::class, 'toggle']
    )->name('favorites.toggle');

    Route::get('/favorites', 
        [FavoriteController::class, 'index']
    )->name('favorites.index');
});

require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
