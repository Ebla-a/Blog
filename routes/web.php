<?php

use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\FavoriteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 //Breeze profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// blog controller 
Route::get('/',[BlogController::class ,'index'])->name('frontend.index');
Route::get('/blog/{blog}',[BlogController::class,'show'])->name('frontend.blog.show');

//favorites (login requierd)
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

