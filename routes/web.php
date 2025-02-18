<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Club 150
Route::get('/club_150', function () {
    return view('club_150.index');
});
// Programme
Route::get('/programme', function () {
    return view('programme.index');
});
// Pillar Project
Route::get('/pillar_project', function () {
    return view('pillar_project.index');
});
// Alumni
Route::get('/alumni', function () {
    return view('alumni.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
