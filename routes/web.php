<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortfolioEntryController;

Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('portfolio', [PortfolioEntryController::class, 'portfolio'])->name('portfolio');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('project/{pageTitle}', [PortfolioEntryController::class, 'project']);

Route::get('/', function () {
    return redirect('home');
});
