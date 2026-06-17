<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;



Route::get('/', [BasicController::class, 'index'])->name('home');