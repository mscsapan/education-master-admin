<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PageController,
    UserController,
    AdminController,
    EventController,
    CourseController
};

Route::get('/', [AdminController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/setting', [AdminController::class, 'setting'])->name('admin.setting');

    Route::get('/all-courses', [CourseController::class, 'allCourse'])->name('admin.all-courses');
    Route::get('/add-courses', [CourseController::class, 'addCourse'])->name('admin.add-courses');
    Route::get('/trash-courses', [CourseController::class, 'trashCourse'])->name('admin.trash-courses');

});

Route::prefix('admin')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/all-users', 'allUsers')->name('admin.all-users');
        Route::get('/add-new-users', 'addNewUsers')->name('admin.add-new-users');
    });

    Route::controller(PageController::class)->group(function () {
        Route::get('/all-pages', 'allPages')->name('admin.all-pages');
        Route::get('/add-new-page', 'addNewPage')->name('admin.add-new-page');
        Route::get('/edit-page', 'editPage')->name('admin.edit-page');
    });


    Route::controller(EventController::class)->group(function () {

        // Event related routes
        Route::get('/event-all', 'allEvent')->name('admin.event-all');
        Route::get('/event-add', 'addEvent')->name('admin.event-add');
        Route::get('/event-edit', 'editEvent')->name('admin.event-edit');
        Route::get('/event-enquiry', 'eventEnquiry')->name('admin.event-enquiry');

        // Seminar related routes
        Route::get('/seminar-all', 'allSeminar')->name('admin.seminar-all');
        Route::get('/seminar-add', 'addSeminar')->name('admin.seminar-add');
        Route::get('/seminar-edit', 'editSeminar')->name('admin.seminar-edit');
        Route::get('/seminar-enquiry', 'seminarEnquiry')->name('admin.seminar-enquiry');

        // job related routes
        Route::get('/job-all', 'allJob')->name('admin.job-all');
        Route::get('/job-add', 'addJob')->name('admin.job-add');
        Route::get('/job-edit', 'editJob')->name('admin.job-edit');
    });
});

