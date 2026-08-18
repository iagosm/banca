<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('subjects', SubjectController::class);
    // Route::resource('topics', TopicController::class);
    // Route::resource('questions', QuestionController::class);
    // Route::resource('mock-exams', MockExamController::class);
    // Route::resource('flashcards', FlashcardController::class);
});

require __DIR__.'/settings.php';
