<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/courses', [CourseController::class, 'courses'])->name('courses.list');
Route::get('/courses/{id}', [CourseController::class, 'course'])->name('courses.single');


Route::group([
    'prefix' => 'admin',
    'middleware' => [CheckAdmin::class],
], function () {
    Route::get('/', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/course/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/course/create-submit', [CourseController::class, 'createSubmit'])->name('courses.create-submit');
});








Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

require __DIR__.'/auth.php';
