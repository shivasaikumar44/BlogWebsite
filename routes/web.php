<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\blogController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index'); // Display a list of all blogs posts
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create'); // Display a form to create a new blogs post
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store'); // Store a new blogs post
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show'); // Display a single blogs post
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit'); // Display a form to edit a blogs post
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update'); // Update a blogs post
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy'); // Delete a blogs post



