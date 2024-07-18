<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Lesson;

class LessonController extends Controller
{
    public function index($id) {
        $items = Lesson::where('id_course', $id)->get();
        
        return view('admin.lesson', compact('items', 'id'));
    }

    public function create($id) {
        return view('admin.lessoncrud.create-lesson', compact('id'));
    }

    public function store(Request $requests, $id) {
        $requests->validate([
            'title_lesson'
        ]);

        Lesson::create([
            'id_course' => $id,
            'title_lesson' => $requests->title_lesson
        ]);
        
        Alert::success('Success', 'Lesson Berhasil Di Buat');
        return redirect()->route('admin.lesson', $id);
    }

    public function edit($id, $id_lesson) {
        $lesson = Lesson::where('id', $id_lesson)->first();
        return view('admin.lessoncrud.edit-lesson', compact('lesson', 'id'));
    }

    public function update(Request $requests, $id, $id_lesson) {
        $requests->validate([
            'title_lesson'
        ]);
        

        $lesson = Lesson::where('id', $id_lesson)->first();
        
        $lesson->update([
            'title_lesson' => $requests->title_lesson
        ]);

        Alert::success('Success', 'Lesson Berhasil Di Edit');
        return redirect()->route('admin.lesson', $id);
    }


    public function delete($id, $id_lesson) {
        $lesson = Lesson::where('id', $id_lesson)->first();
        
        $lesson->delete();
        Alert::success('Success', 'Lesson Berhasil Di Hapus');
        return redirect()->route('admin.lesson', $id);
    }
}