<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['auth'])->group(function(){
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
    //Route::get('post', [App\Http\Controllers\PostController::class,'index'])->name('post.index');
    Route::resource('post',App\Http\Controllers\PostController::class);

});
