<?php

use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminDashboardController;


Route::middleware(['auth','admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        
        //dashboard
                
            Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        // Blogs
        Route::resource('blogs', AdminBlogController::class);
        Route::get('blogs-trash', [AdminBlogController::class ,'trash'])->name('blogs.trash');
        Route::put('blogs/{blog}/restore', [AdminBlogController::class ,'restore'])->name('blogs.restore');
        Route::delete('blogs/{blog}/force', [AdminBlogController::class,'forceDelete'])->name('blogs.force');

        // Categories
        Route::resource('categories', AdminCategoryController::class);

    });
  



