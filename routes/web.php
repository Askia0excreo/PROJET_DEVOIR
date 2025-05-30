<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etudiant', [App\Http\Controllers\etudiantController::class, 'index'])->name('etudiant.index');
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

