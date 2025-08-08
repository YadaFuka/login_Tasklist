<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [TasksController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TasksController::class);
});

require __DIR__.'/auth.php';
