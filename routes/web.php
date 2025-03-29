<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');;
Route::view('/contact', 'contact')->name('contact');

use App\Http\Controllers\LeadController;

Route::get('/leads', [LeadController::class, 'index'])->name('lead.index');;
Route::post('/lead', [LeadController::class, 'store'])->name('lead.store');
