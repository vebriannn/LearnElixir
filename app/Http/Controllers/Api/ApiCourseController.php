<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Api\ApiCourse;
use App\Models\User;
use App\Models\Course;

class ApiCourseController extends Controller
{
    public function course() {
        $course = User::with('course')->get();
        return ApiCourse::collection($course);
    }
}