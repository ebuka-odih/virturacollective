<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('index');
Route::view('services/assistants', 'pages.assistants')->name('assistants');
Route::view('services/accounting', 'pages.accounting')->name('accounting');
Route::view('services/marketing', 'pages.marketing')->name('marketing');
