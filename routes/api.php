<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiCourseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('v1/course', [ApiCourseController::class, 'course']);
Route::get('v1/kategori', [ApiCourseController::class, 'kategori']);
Route::get('v1/course', [ApiCourseController::class, 'apiFilterKategori']);
// Route::get('member/course/{slug}', [MemberDashboardController::class, 'index'])->name('member.dashboard');