<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

//Home Page
Route::get('/', [FrontendController::class, 'home'])->name('home');

//Project Section
Route::get('/project', [FrontendController::class, 'project'])->name('project');
Route::get('/projects/{slug}', [FrontendController::class, 'projectDetails'])->name('projects.details');

//
Route::post('/project/query', [FrontendController::class, 'userProjectQuery'])->name('user.project-query.store');

//About Section
Route::get('/about', [FrontendController::class, 'about'])->name('about');

//Contact Section
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact-store', [FrontendController::class, 'contactStore'])->name('contact.store');

//Query Section
Route::get('/query', [FrontendController::class, 'query'])->name('query');
Route::post('/query-store', [FrontendController::class, 'queryStore'])->name('query.store');

//Term Section
Route::get('/term', [FrontendController::class, 'term'])->name('term');

//Privacy & Policy
Route::get('/privacy', [FrontendController::class, 'privacy'])->name('privacy');

//Pricing
Route::get('/pricing', [FrontendController::class, 'pricing'])->name('pricing');
//Pricing Store
Route::post('/pricing/store', [FrontendController::class, 'pricingStore'])->name('pricing.store');

Route::get('plan/{slug}/subscribe', [FrontendController::class, 'planSubscribe'])
        ->name('plan.subscribe');
