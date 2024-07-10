<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Kategori;

class CourseController extends Controller
{
    public function index() {
        $kategori = Kategori::all();
        
        return view('member.course', compact('kategori'));
    }
}