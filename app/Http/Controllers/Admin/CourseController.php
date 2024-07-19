<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Course;
use App\Models\Kategori;
use App\Models\Lesson;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Sluggable;

class CourseController extends Controller
{
    public function index() {
        $items = User::with('course')->findOrFail(1);
        return view('admin.course', compact('items'));
    }

    public function create() {
        $kategori = Kategori::OrderBy('id', 'ASC')->get();
        $checked =  $kategori->min('id');
        return view('admin.coursecrud.create-course', compact('kategori', 'checked'));
    }

    public function store(Request $requests) {

        $data = $requests->except('_token', '_method');
        $requests->validate([
            'title' => 'required',
            'images' => 'required|image|mimes:jpg,jpeg,png',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'duration' => 'required',
            'total_lesson' => 'required',
        ]);
        

        $images = $requests->images;
        $getNameNewImages = Str::random(10).$requests->images->getClientOriginalName();
        $images->storeAs('public/courseImages/', $getNameNewImages);
        // Storage::disk('public')->put('courseImages/', $renameImages);
        
        $data['images'] = $getNameNewImages;
        
        $course = Course::create([
            'title' => $requests->title,
            'id_mentor' => 1,
            'images' => $data['images'],
            'deskripsi' => $requests->deskripsi,
            'kategori' => $requests->kategori,
            'duration' => $requests->duration,
            'total_lesson' => $requests->total_lesson,
        ]);
        
        
        Alert::success('Success', 'Data Berhasil Di Buat');
        return redirect()->route('admin.course');
        
    }

    public function edit($id) {
        $items = Course::where('id', $id)->first();
        $kategori = Kategori::OrderBy('id', 'ASC')->get();
        $checked =  $items->kategori;
        return view('admin.coursecrud.edit-course', compact('items', 'kategori', 'checked'));
    }

    public function update(Request $requests, $id) {
        
        $course = Course::where('id', $id)->first();
        $data = $requests->except('_token', '_method');

        $requests->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'duration' => 'required',
            'total_lesson' => 'required',
        ]);

        $data['id_mentor'] = 1;

        if($requests->images) {
            // check apakah images berupa jpg, jpeg, png
            // $requests->validate(['images' => 'required|image|mimes:jpg,jpeg,png']);
            Storage::disk('public')->delete('courseImages/'.$course->images);
            
            $images = $requests->images;
            $getNameNewImages = Str::random(10).$requests->images->getClientOriginalName();
            $images->storeAs('public/courseImages/', $getNameNewImages);

            $data['images'] = $getNameNewImages;
        }
        else {
            $data['images'] = $course->images;
        }

        $course->update([
            'title' => $requests->title,
            'id_mentor' => $data['id_mentor'],
            'images' => $data['images'],
            'deskripsi' => $requests->deskripsi,
            'kategori' => $requests->kategori,
            'duration' => $requests->duration,
            'total_lesson' => $requests->total_lesson,
        ]);

        Alert::success('Success', 'Data Berhasil Di Edit');
        return redirect()->route('admin.course');
    }


    public function delete($id) {
        $course = Course::where('id', $id)->first();
        
        $lesson = Lesson::where('id_course', $id)->first();
        if(!$lesson) {
            Storage::disk('public')->delete('courseImages/'.$course->images);
            $course->delete();
            Alert::success('Success', 'Data Berhasil Di Hapus');
        }
        else {
            Alert::info('Gagal', 'Maaf Anda Tidak Hapus Data Course, Karena Anda Masih Menyimpan Data Lesson Dan Sources');
        }
        return redirect()->route('admin.course');
    }
}