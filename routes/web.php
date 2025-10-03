<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'landing']);
Route::get('/about', [ViewController::class, 'about']);
Route::get('/courses', [ViewController::class, 'courses']);
Route::get('/contact', [ViewController::class, 'contact']);
