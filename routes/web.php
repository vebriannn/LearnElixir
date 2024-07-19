<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\SourceVideoController;
use App\Http\Controllers\Member\DashboardController as MemberDashboardController;
use App\Http\Controllers\Member\CourseController as MemberCourseController;
use App\Http\Controllers\Member\Auth\LoginController as MemberLoginController;
use App\Http\Controllers\Member\Auth\RegisterController as MemberRegisterController;


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

// authen member
Route::get('/logout', [MemberLoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/login/auth', [AdminLoginController::class, 'login'])->name('admin.login.auth');
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    
    Route::prefix('course')->group(function () {

        // routes course
        Route::get('/', [CourseController::class, 'index'])->name('admin.course');
        Route::get('/create', [CourseController::class, 'create'])->name('admin.course.create');
        Route::post('/create/store', [CourseController::class, 'store'])->name('admin.course.create.store');
        
        Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('admin.course.edit');
        Route::put('/edit/update/{id}', [CourseController::class, 'update'])->name('admin.course.edit.update');

        Route::get('/delete/{id}', [CourseController::class, 'delete'])->name('admin.course.delete');
        // end course


        //  routes lesson
        Route::get('{id_course}/lesson', [LessonController::class, 'index'])->name('admin.lesson');

        Route::get('{id_course}/lesson/create', [LessonController::class, 'create'])->name('admin.lesson.create');
        Route::post('{id_course}/lesson/create/store', [LessonController::class, 'store'])->name('admin.lesson.create.store');
        
        Route::get('{id_course}/lesson/{id_lesson}/edit', [LessonController::class, 'edit'])->name('admin.lesson.edit');
        Route::put('{id_course}/lesson/{id_lesson}/edit/update', [LessonController::class, 'update'])->name('admin.lesson.edit.update');

        Route::get('{id_course}/lesson/{id_lesson}/delete', [LessonController::class, 'delete'])->name('admin.lesson.delete');
        // end lesson


        // routes sources video 
        Route::get('/course/{id_course}/lesson/{id_lesson}/sources', [SourceVideoController::class, 'index'])->name('admin.sources');

        Route::get('/course/{id_course}/lesson/{id_lesson}/sources/create', [SourceVideoController::class, 'create'])->name('admin.sources.create');
        Route::post('/course/{id_course}/lesson/{id_lesson}/sources/create/store', [SourceVideoController::class, 'store'])->name('admin.sources.create.store');

        Route::get('/course/{id_course}/lesson/{id_lesson}/sources/{id_sources}/edit', [SourceVideoController::class, 'edit'])->name('admin.sources.edit');
        Route::put('/course/{id_course}/lesson/{id_lesson}/sources/{id_sources}/edit/update', [SourceVideoController::class, 'update'])->name('admin.sources.edit.update');

        Route::get('/course/{id_course}/lesson/{id_lesson}/sources/delete/{id_sources}', [SourceVideoController::class, 'delete'])->name('admin.sources.delete');
        // routes end sources video
    });


    // routes kategori 
    Route::prefix('kategori')->group(function () {
        Route::get('/', [KategoriController::class, 'index'])->name('admin.kategori');
        Route::get('/create', [KategoriController::class, 'create'])->name('admin.kategori.create');
        Route::post('/create/store', [KategoriController::class, 'store'])->name('admin.kategori.create.store');
        
        Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
        Route::put('/edit/update/{id}', [KategoriController::class, 'update'])->name('admin.kategori.edit.update');
        
        Route::get('/delete/{id}', [KategoriController::class, 'delete'])->name('admin.kategori.delete');
    });

});



Route::prefix('member')->group(function () {
    // login user
    Route::get('/login', [MemberLoginController::class, 'index'])->name('member.login');
    Route::post('/login/auth', [MemberLoginController::class, 'login'])->name('member.login.auth');

    // register user
    Route::get('/register', [MemberRegisterController::class, 'index'])->name('member.registrasi');
    Route::post('/register/store', [MemberRegisterController::class, 'store'])->name('member.registrasi.store');

    Route::get('/course', [MemberCourseController::class, 'index'])->name('member.course');
    
    // akses menu
    Route::middleware('member.middleware')->group(function () {
        Route::get('/join/kelas/{slug}', [MemberCourseController::class, 'joinKelas'])->name('member.join.kelas');
    });
    
});

Route::view('/h', 'datamember');