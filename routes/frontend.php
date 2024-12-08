<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Route;

//Contact Section
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');
Route::post('/contact-store', [HomePageController::class, 'contactStore'])->name('contact.store');


