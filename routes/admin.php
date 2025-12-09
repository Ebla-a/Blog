<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCategoryController;
Route::middleware(['auth','admin'])
->prefix('name')
->name('admin')
->group(function () {
    Route::resource('blogs',AdminBlogController::class);
    Route::get('blogs-trash',[AdminBlogController::class ,'trash'])->name('blogs.trash');
    Route::put('blogs/{id}/restore',[AdminBlogController::class ,'restore'])->name('blogs.restore');
    Route::delete('blogs/{id}/force',[AdminBlogController::class,'forceDelete'])->name('blogs.force');

    Route::resource('categories',AdminCategoryController::class);
});