<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

use App\Models\Course;
use App\Models\Kategori;
use App\Models\Lesson;
use App\Models\Sources;

class CourseController extends Controller
{
    public function index() {
        // $kategori = Kategori::all();

        return view('member.course');
    }

    public function joinKelas(Request $requests, $slug) {
    
        $course = Course::with('lessons')->where('slug', $slug)->firstOrFail();
        $sources = Lesson::with('sources')->get();
        
        // dd($sources);
        return view('member.user', compact('course', 'sources'));
    }
}