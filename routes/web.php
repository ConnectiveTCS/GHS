<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectCardsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Club 150
Route::get('/club_150', function () {
    $projectCards = \App\Models\ProjectCards::all();
    return view('club_150.index', compact('projectCards'));
});
// Programme
Route::get('/programme', [EventsController::class, 'programme'])->name('programme');
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

    // Use only the resource route for project cards
    Route::resource('/project-cards', ProjectCardsController::class);

    // Optional: you may keep a create route if needed:
    Route::get('/create', function () {
        return view('club_150.project_card.create');
    });
    Route::get('/projects', function () {
        $projectCards = \App\Models\ProjectCards::all();
        return view('club_150.project_card.index', compact('projectCards'));
    })->name('projectCards');

    // Events CRUD routes
    Route::resource('/events', App\Http\Controllers\EventsController::class);
});

require __DIR__ . '/auth.php';
