<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormSubmissionController;


// Route::get('/', function () {
//     return view('home');
// }) -> name('home');

Route::get('/', [FormSubmissionController::class, 'home'])->name('home');
Route::get('/form', [FormSubmissionController::class, 'create'])->name('form');
Route::post('/form', [FormSubmissionController::class, 'store']);
