<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/tasks');

Route::resource('tasks', \App\Http\Controllers\TaskController::class);