<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminAssignmentController;

// Admin Routes
Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    
    Route::middleware('auth:admin')->group(function() {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // Course Routes
        Route::get('/courses', [AdminController::class, 'courses'])->name('admin.courses.index');
        Route::get('/courses/create', [AdminController::class, 'createCourseForm'])->name('admin.courses.create');
        Route::post('/courses', [AdminController::class, 'createCourse'])->name('admin.courses.store');
        Route::get('/courses/{id}/edit', [AdminController::class, 'editCourseForm'])->name('admin.courses.edit');
        Route::put('/courses/{id}', [AdminController::class, 'editCourse'])->name('admin.courses.update');
        Route::delete('/courses/{id}', [AdminController::class, 'deleteCourse'])->name('admin.courses.destroy');
        
        // Class Routes
        Route::post('/class/create', [AdminController::class, 'createClass'])->name('admin.class.create');
        Route::put('/class/{id}/edit', [AdminController::class, 'editClass'])->name('admin.class.edit');
        Route::delete('/class/{id}', [AdminController::class, 'deleteClass'])->name('admin.class.delete');
        
        // Assignment Routes
        Route::get('/assignments', [AdminAssignmentController::class, 'index'])->name('admin.assignments.index');
        Route::get('/assignments/create', [AdminAssignmentController::class, 'create'])->name('admin.assignments.create');
        Route::post('/assignments', [AdminAssignmentController::class, 'store'])->name('admin.assignments.store');
        Route::get('/assignments/{id}/edit', [AdminAssignmentController::class, 'edit'])->name('admin.assignments.edit');
        Route::put('/assignments/{id}', [AdminAssignmentController::class, 'update'])->name('admin.assignments.update');
        Route::delete('/assignments/{id}', [AdminAssignmentController::class, 'destroy'])->name('admin.assignments.destroy');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Tasks
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

    // Classroom
    Route::get('/classroom/{id}', [ClassroomController::class, 'show'])->name('classroom.show');
    Route::get('/classroom/create', [ClassroomController::class, 'create'])->name('classroom.create');
    Route::post('/classroom', [ClassroomController::class, 'store'])->name('classroom.store');
    Route::post('/classroom/{id}/join', [ClassroomController::class, 'join'])->name('classroom.join');

    // Course Routes
    Route::get('/course/web-development', [CourseController::class, 'webDevelopment'])->name('course.web');
    Route::get('/course/mobile-development', [CourseController::class, 'mobileDevelopment'])->name('course.mobile');
    Route::get('/course/data-science', [CourseController::class, 'dataScience'])->name('course.data');
    Route::get('/course/ui-ux-design', [CourseController::class, 'uiUxDesign'])->name('course.uiux');
    Route::get('/course/machine-learning', [CourseController::class, 'machineLearning'])->name('course.ml');
    Route::get('/course/deep-learning', [CourseController::class, 'deepLearning'])->name('course.deep');

    // Assignment routes
    Route::get('/classroom/{id}/assignments/create', [ClassroomController::class, 'createAssignment'])->name('classroom.assignments.create');
    Route::post('/classroom/{id}/assignments', [ClassroomController::class, 'storeAssignment'])->name('classroom.assignments.store');
    Route::get('/classroom/{id}/assignments/{assignment}/edit', [ClassroomController::class, 'editAssignment'])->name('classroom.assignments.edit');
    Route::put('/classroom/{id}/assignments/{assignment}', [ClassroomController::class, 'updateAssignment'])->name('classroom.assignments.update');
    Route::delete('/classroom/{id}/assignments/{assignment}', [ClassroomController::class, 'deleteAssignment'])->name('classroom.assignments.destroy');
});

Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile/avatar', [ProfileController::class, 'removeAvatar'])->name('profile.remove-avatar');

    // Task routes
    Route::resource('tasks', TaskController::class);
    Route::post('/tasks/{task}/upload', [TaskController::class, 'upload'])->name('tasks.upload');
    Route::get('/tasks/{task}/download', [TaskController::class, 'download'])->name('tasks.download');
    Route::delete('/tasks/{task}/file', [TaskController::class, 'deleteFile'])->name('tasks.delete-file');

    // Class routes
    Route::resource('classes', ClassController::class);
});

// Public Pages
Route::get('/courses', [CourseController::class, 'index'])->name('courses');

Route::get('/mentors', function () {
    return view('pages.mentors');
})->name('mentors');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/courses/search', [CourseController::class, 'search'])->name('courses.search');

// Social Authentication Routes
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

require __DIR__.'/auth.php';
