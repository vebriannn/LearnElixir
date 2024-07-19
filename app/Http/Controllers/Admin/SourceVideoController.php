<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sources;
use PHPUnit\TextUI\Configuration\Source;
use RealRashid\SweetAlert\Facades\Alert;

class SourceVideoController extends Controller
{
    public function index($id_course, $id_lesson) {
        $sources = Sources::where('id_lesson', $id_lesson)->get();
        return view('admin.sources', compact('sources', 'id_course', 'id_lesson'));
    }

    public function create($id_course, $id_lesson) {
        return view('admin.sourcescrud.create-sources', compact('id_course', 'id_lesson'));
    }

    public function store(Request $requests, $id_course, $id_lesson) {
        $requests->validate([
            'name_source' => 'required',
            'time_source' => 'required',
            'link_source' => 'required',
        ]);
        
        Sources::create([
            'id_lesson' => $id_lesson,
            'name_source' => $requests->name_source,
            'time_source' => $requests->time_source,
            'link_source' => $requests->link_source,
        ]);

        Alert::success('Success', 'Lesson Berhasil Di Buat');
        return redirect()->route('admin.sources', ['id_course' => $id_course, 'id_lesson' => $id_lesson]);
    }

    public function edit($id_course, $id_lesson, $id_sources) {
        $sources = Sources::where('id', $id_sources)->first();
        return view('admin.sourcescrud.edit-sources', compact('sources', 'id_course', 'id_lesson'));
    }
    
    public function update(Request $requests, $id_course, $id_lesson, $id_sources) {
        $requests->validate([
            'name_source' => 'required',
            'time_source' => 'required',
            'link_source' => 'required',
        ]);

        $sources = Sources::where('id', $id_sources)->first();
        
        $sources->update([
            'name_source' => $requests->name_source,
            'time_source' => $requests->time_source,
            'link_source' => $requests->link_source,
        ]);

        Alert::success('Success', 'Sources Berhasil Di Edit');
        return redirect()->route('admin.sources', ['id_course' => $id_course, 'id_lesson' => $id_lesson]);
    }
    


    public function delete($id_course, $id_lesson, $id_sources) {
        $sources = Sources::where('id', $id_sources)->first();
        $sources->delete();

        Alert::success('Success', 'Sources Berhasil Di Hapus');
        return redirect()->route('admin.sources', ['id_course' => $id_course, 'id_lesson' => $id_lesson]);
    }
}