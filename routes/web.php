<?php

use App\Http\Controllers\{
    Admin\CommentController, UserController
};
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/users/{id}/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
    Route::get('/users/{user}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
    Route::post('/users/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::get('/', function () {
    // return view('welcome');
    return redirect("/users");
});

require __DIR__ . '/auth.php';
