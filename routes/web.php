<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Portfolio Routes
Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'submitContact'])->name('contact.submit');
