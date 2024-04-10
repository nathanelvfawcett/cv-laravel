<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('portfolio', [FrontController::class, 'portfolio'])->name('portfolio');
Route::get('about', [FrontController::class, 'about'])->name('about');

Route::get('/', function () {
    return redirect('home');
});
