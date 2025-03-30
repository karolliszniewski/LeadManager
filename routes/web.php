<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');;
Route::view('/contact', 'contact')->name('contact');



Route::get('admin/leads', [LeadController::class, 'index'])->name('lead.index');;
Route::post('/lead', [LeadController::class, 'store'])->name('lead.store');


Route::get('lead/confirm/{token}', [LeadController::class, 'confirm'])->name('lead.confirm');
