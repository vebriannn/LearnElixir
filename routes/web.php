<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\KategoriController;

use App\Models\Course;
use App\Models\Kategori;

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


Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    Route::get('/course', [CourseController::class, 'index'])->name('admin.course');
    Route::get('/course/create', [CourseController::class, 'create'])->name('admin.course.create');
    Route::post('/course/create/store', [CourseController::class, 'store'])->name('admin.course.create.store');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('admin.course.edit');
    Route::put('/course/edit/update/{id}', [CourseController::class, 'update'])->name('admin.course.edit.update');
    Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('admin.course.delete');
    Route::post('/kategori/create/store', [KategoriController::class, 'store'])->name('admin.kategori.create.store');
});