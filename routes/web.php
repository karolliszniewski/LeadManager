<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LeadController;

Route::view('/contact', 'contact')->name('contact');
Route::post('/lead', [LeadController::class, 'store'])->name('lead.store');
