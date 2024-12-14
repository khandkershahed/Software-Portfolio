<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Route;

//Home Page
Route::get('/', [FrontendController::class, 'home'])->name('home');

//About Section
Route::get('/about', [FrontendController::class, 'about'])->name('about');

//Contact Section
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact-store', [FrontendController::class, 'contactStore'])->name('contact.store');


