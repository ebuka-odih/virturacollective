<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('index');
Route::view('/about', 'pages.about')->name('about');
Route::view('services/assistants', 'pages.assistants')->name('assistants');
Route::view('services/accounting', 'pages.accounting')->name('accounting');
Route::view('services/marketing', 'pages.marketing')->name('marketing');
Route::view('get_started', 'pages.get-started')->name('get_started');
Route::post('store/get_started', [ContactUsController::class, 'store'])->name('store.contact');
