<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::post('/about', [AboutController::class, 'store'])->name('about.store');
