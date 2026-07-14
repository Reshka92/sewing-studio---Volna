<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\MessageController;




Route::get('/', [BasicController::class, 'index'])->name('home');
Route::post('/', [BasicController::class, 'submit'])->name('home.post');
Route::get('/about', [BasicController::class, 'about'])->name('about');
// Route::get('/works', [BasicController::class, 'works'])->name('works');
Route::get('/works', [MessageController::class, 'index'])->name('works');


Route::get('/contacts', [BasicController::class, 'contacts'])->name('contacts');
Route::get('/prices', [BasicController::class, 'prices'])->name('prices');