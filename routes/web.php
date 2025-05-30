<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etudiant', [App\Http\Controllers\etudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiant/create', [App\Http\Controllers\etudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant/store', [App\Http\Controllers\etudiantController::class, 'store'])->name('etudiant.store'); 
Route::get('/etudiants/{id}/edit', [etudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiant/update', [App\Http\Controllers\etudiantController::class, 'update'])->name('etudiant.update');
Route::delete('/etudiant/delete', [App\Http\Controllers\etudiantController::class, 'destroy'])->name('etudiant.delete');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/evaluation', [App\Http\Controllers\etudiantController::class, 'index'])->name('evaluation.index');
Route::get('/evaluation/create', [App\Http\Controllers\etudiantController::class, 'create'])->name('evaluation.create');
Route::get('/evaluation/store', [App\Http\Controllers\etudiantController::class, 'store'])->name('evaluation.store');


