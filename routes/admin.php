<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\DocumentController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\OnlineExamController;
use App\Http\Controllers\admin\QuestionController;
use App\Http\Controllers\admin\ScoreController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\UserController;
use \App\Http\Controllers\auth\AuthController;
use \App\Http\Controllers\auth\VerifyEmailController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\AsignController;
use App\Http\Controllers\admin\OfflineCourseController;
use \App\Http\Controllers\admin\NewsletterController;



/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/

    Route::view('dashboard', 'admin.dashboard')->name('dashboard');

    Route::resource('about', AboutController::class)->names([
        'create' => 'about.create',
        'edit' => 'about.edit',
        'show' => 'about.show',
        'index' => 'about.list',
    ]);
    Route::resource('contacts', ContactController::class)->names([
        'create' => 'contacts.create',
        'edit' => 'contacts.edit',
        'show' => 'contacts.show',
        'index' => 'contacts.list',
    ]);
    Route::resource('courses', CourseController::class)->names([
        'create' => 'course.create',
        'edit' => 'course.edit',
        'show' => 'course.show',
        'index' => 'course.list',
    ]);
    Route::resource('documents', DocumentController::class)->names([
        'show' => 'document.show',
        'index' => 'document.list',
    ]);
    Route::resource('offline-courses', OfflineCourseController::class)->names([
        'create' => 'offline.create',
        'edit' => 'offline.edit',
        'show' => 'offline.show',
        'index' => 'offline.list',
    ]);
    Route::resource('gallery', GalleryController::class)->names([
        'create' => 'gallery.create',
        'edit' => 'gallery.edit',
        'show' => 'gallery.show',
        'index' => 'gallery.list',
    ]);
    Route::resource('news', NewsController::class)->names([
        'create' => 'news.create',
        'edit' => 'news.edit',
        'show' => 'news.show',
        'index' => 'news.list',
    ]);
    Route::delete('/deleteImage/{id}', [NewsController::class, 'deleteImage']);

    Route::resource('newsletters', NewsletterController::class)->names([
        'create' => 'newsletter.create',
        'edit' => 'newsletter.edit',
        'show' => 'newsletter.show',
        'index' => 'newsletter.list',
    ]);

    Route::resource('online_exams', OnlineExamController::class)->names([
        'create' => 'online_exam.create',
        'edit' => 'online_exam.edit',
        'show' => 'online_exam.show',
        'index' => 'online_exam.list',
    ]);
    Route::resource('questions', QuestionController::class)->names([
        'create' => 'question.create',
        'edit' => 'question.edit',
        'show' => 'question.show',
        'index' => 'question.list',
    ]);

    Route::resource('teachers', TeacherController::class)->names([
        'create' => 'teachers.create',
        'edit' => 'teachers.edit',
        'show' => 'teachers.show',
        'index' => 'teachers.list',
    ]);
    Route::resource('users', UserController::class)->names([
        'create' => 'user.create',
        'edit' => 'user.edit',
        'show' => 'user.show',
        'index' => 'user.list',
    ]);
    Route::delete('/deletephoto/{id}', [UserController::class, 'deletephoto']);

    Route::get('/scores', [\App\Http\Controllers\admin\ScoreController::class, 'index'])->name('score.list');
    Route::get('/scores/{id}/create', [\App\Http\Controllers\admin\ScoreController::class, 'create']);
    Route::post('/scores', [\App\Http\Controllers\admin\ScoreController::class, 'store']);
    Route::get('/scores/{id}/edit', [\App\Http\Controllers\admin\ScoreController::class, 'edit']);
    Route::put('/scores/{id}', [\App\Http\Controllers\admin\ScoreController::class, 'update']);
    Route::get('/scores/{id}', [\App\Http\Controllers\admin\ScoreController::class, 'show'])->name('score.show');


    Route::get('/enroll-course-list', [\App\Http\Controllers\admin\EnrollController::class, 'courseList'])->name('enroll-course-list');
    Route::get('/enrolls', [\App\Http\Controllers\admin\EnrollController::class, 'index']);
    Route::get('/enrolls/{id}/create', [\App\Http\Controllers\admin\EnrollController::class, 'create']);
    Route::post('/enrolls', [\App\Http\Controllers\admin\EnrollController::class, 'store']);

    Route::get('/results', [\App\Http\Controllers\admin\ResultController::class, 'index'])->name('result.list');
    Route::get('/results/{id}', [\App\Http\Controllers\admin\ResultController::class, 'show'])->name('result.show');


