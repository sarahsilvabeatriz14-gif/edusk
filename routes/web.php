<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Pest\Support\View;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/dashboard', function() {
    return View('dashboard');

Route::delete('/students/{id}', [StudentController::class, 'destroy']);
Route::get('/students/{id}/edit', [StudentController::class, 'edit']);

Route::put('/students/{id}', [StudentController::class, 'update']);


});


require __DIR__.'/auth.php';



Route::resource('students', StudentController::class);
