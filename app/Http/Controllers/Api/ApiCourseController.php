<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Http\Resources\Api\ApiCourse;
use App\Http\Resources\Api\ApiKategori;
use App\Models\User;
use App\Models\Course;
use App\Models\Kategori;

class ApiCourseController extends Controller
{
    public function course() {
        $course = User::with('course')->get();
        return ApiCourse::collection($course);
    }

    public function kategori() {
        $kategori = Kategori::all();
        
        $addData = [
            'id' => 0,
            'name_kategori' => 'All' // Nama kategori untuk data tambahan
        ];
        
        $newKategori = $kategori->push((object)$addData);
        $sortedKategori = $newKategori->sortBy('id');
        return ApiKategori::collection($sortedKategori);
    }

    public function apiFilterKategori(Request $requests) {
        $id = $requests->query('id'); 
        $kategori = Kategori::where('id', $id)->first();

        
        if($id != 0) {
            $getNameKategori = $kategori->name_kategori; 
            $course = User::with(['course' => function ($query) use ($getNameKategori) {
                    $query->where('kategori', $getNameKategori);
                }])->get();
        }
        else {
            $course = User::with('course')->get();
        }
        return ApiCourse::collection($course);
    }
}