<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Models\Course;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    public function index() {
        $items = Course::all();
        return view('admin.course', compact('items'));
    }

    public function create() {
        return view('admin.coursecrud.create-course');
    }

    public function store(Request $requests) {

        $data = $requests->except('_token', '_method');

        $requests->validate([
            'title' => 'required',
            'mentor' => 'required',
            'images' => 'required|image|mimes:jpg,jpeg,png',
            'link' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);

        $images = $requests->images;
        $getNameNewImages = Str::random(10).$requests->images->getClientOriginalName();
        $images->storeAs('public/courseImages/', $getNameNewImages);
        // Storage::disk('public')->put('courseImages/', $renameImages);
        
        $data['images'] = $getNameNewImages;

        Course::create([
            'title' => $requests->title,
            'mentor' => $requests->mentor,
            'images' => $data['images'],
            'link' => $requests->link,
            'deskripsi' => $requests->deskripsi,
            'kategori' => $requests->kategori,
        ]);
        
        Alert::success('Success', 'Data Berhasil Di Buat');
        return redirect()->route('admin.course');
        
    }

    public function edit($id) {
        $items = Course::where('id', $id)->first();
        return view('admin.coursecrud.edit-course', compact('items'));
    }

    public function update(Request $requests, $id) {
        
        $course = Course::where('id', $id)->first();
        $data = $requests->except('_token', '_method');

        $requests->validate([
            'title' => 'required',
            'mentor' => 'required',
            'link' => 'required|url',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);

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
            'mentor' => $requests->mentor,
            'images' => $data['images'],
            'link' => $requests->link,
            'deskripsi' => $requests->deskripsi,
            'kategori' => $requests->kategori,
        ]);

        Alert::success('Success', 'Data Berhasil Di Edit');
        return redirect()->route('admin.course');
    }


    public function delete($id) {
        $course = Course::where('id', $id)->first();
        Storage::disk('public')->delete('courseImages/'.$course->images);
        $course->delete();

        Alert::success('Success', 'Data Berhasil Di Hapus');
        return redirect()->route('admin.course');
    }
}