<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\LessonController;
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
    
    Route::get('/course', [CourseController::class, 'index'])->name('admin.course');
    Route::get('/course/create', [CourseController::class, 'create'])->name('admin.course.create');
    Route::post('/course/create/store', [CourseController::class, 'store'])->name('admin.course.create.store');
    
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('admin.course.edit');
    Route::put('/course/edit/update/{id}', [CourseController::class, 'update'])->name('admin.course.edit.update');

    Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('admin.course.delete');
    
    Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('admin.kategori.create');
    Route::post('/kategori/create/store', [KategoriController::class, 'store'])->name('admin.kategori.create.store');
    
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
    Route::put('/kategori/edit/update/{id}', [KategoriController::class, 'update'])->name('admin.kategori.edit.update');
    
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('admin.kategori.delete');

    Route::get('/course/lesson/{id}', [LessonController::class, 'index'])->name('admin.lesson');
    
    Route::get('/course/lesson/{id}/create', [LessonController::class, 'create'])->name('admin.lesson.create');
    Route::post('/course/lesson/{id}/create/store', [LessonController::class, 'store'])->name('admin.lesson.create.store');
    
    Route::get('/course/lesson/{id}/edit/{id_lesson}', [LessonController::class, 'edit'])->name('admin.lesson.edit');
    Route::post('/course/lesson/{id}/edit/update/{id_lesson}', [LessonController::class, 'update'])->name('admin.lesson.edit.update');

    Route::get('/course/lesson/{id}/delete/{id_lesson}', [LessonController::class, 'delete'])->name('admin.lesson.delete');
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