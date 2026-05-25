<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\EnrollmentController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrequencyController;

Route::resource('frequencies', FrequencyController::class);

Route::get('/sair', function() {

    Auth::logout();

    return redirect('/login');

});

Route::get('/dashboard', function () {

    $students = \App\Models\Student::count();

    $teachers = \App\Models\Teacher::count();

    $classrooms = \App\Models\Classroom::count();

    return view('dashboard', compact(

        'students',
        'teachers',
        'classrooms'

    ));

})->name('dashboard');

Route::resource('students', StudentController::class);

Route::resource('teachers', TeacherController::class)
    ->middleware('admin');

Route::resource('classrooms', ClassroomController::class);

Route::resource('grades', GradeController::class);

Route::resource('enrollments', EnrollmentController::class)
    ->middleware('admin');

require __DIR__.'/auth.php';