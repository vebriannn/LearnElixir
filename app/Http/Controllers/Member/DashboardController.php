<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;

class DashboardController extends Controller
{
    public function index($slug) {
        $items = Course::where('slug', $slug)->first();
        dd($items);
        // return view('welcome', compact('items'));
    }
}