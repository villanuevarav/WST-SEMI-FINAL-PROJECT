<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Redirect root to the task list
Route::redirect('/', '/tasks');

// Full CRUD (index, create, store, edit, update, destroy)
Route::resource('tasks', TaskController::class);

// Dedicated route to toggle a task's status
Route::patch('/tasks/{task}/status', [TaskController::class, 'updateStatus'])->name('tasks.updateStatus');
