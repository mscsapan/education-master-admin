<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;

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



Route::get('/', [AdminController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/setting', [AdminController::class, 'setting'])->name('admin.setting');

    Route::get('/all-courses', [CourseController::class, 'allCourse'])->name('admin.all-courses');
    Route::get('/add-courses', [CourseController::class, 'addCourse'])->name('admin.add-courses');
    Route::get('/trash-courses', [CourseController::class, 'trashCourse'])->name('admin.trash-courses');

});
