<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationControllerController;

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


Route::get('/evaluation/index', [App\Http\Controllers\EvaluationController::class, 'index'])->name('evaluation.index');
Route::post('/evaluation/store', [App\Http\Controllers\EvaluationController::class, 'store'])->name('evaluation.store');
Route::get('/evaluation', [App\Http\Controllers\EvaluationController::class, 'create'])->name('evaluation.create');

Route::get('/note/index', [App\Http\Controllers\noteController::class, 'index'])->name('note.index');
Route::get('/note/create', [App\Http\Controllers\noteController::class, 'create'])->name('note.create');
Route::post('/note/store', [App\Http\Controllers\noteController::class, 'store'])->name('note.store');