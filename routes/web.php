<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\FeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Department Routes
Route::resource('departments', DepartmentController::class);

// Course Routes
Route::resource('courses', CourseController::class);

// Batch Routes
Route::resource('batches', BatchController::class);

// Student Routes
Route::resource('students', StudentController::class);

// Teacher Routes
Route::resource('teachers', TeacherController::class);

// Subject Routes
Route::resource('subjects', SubjectController::class);

// Enrollment Routes
Route::resource('enrollments', EnrollmentController::class);

// Grade Routes
Route::resource('grades', GradeController::class);

// Attendance Routes
Route::resource('attendances', AttendanceController::class);

// Fee Routes
Route::resource('fees', FeeController::class);
