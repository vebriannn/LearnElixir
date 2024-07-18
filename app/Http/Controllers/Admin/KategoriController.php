<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Kategori;

class KategoriController extends Controller
{

    public function index() {
        $items = Kategori::all();
        return view('admin.kategori', compact('items'));
    }

    public function create() {
        return view('admin.kategoricrud.create-kategori');
    }
    
    public function store(Request $requests) {
        $data = $requests->except('_token');
        
        // dd($requests->all());
        $requests->validate([
            'name_kategori' => 'required'
        ]);

        $kategori = Kategori::where('name_kategori', $requests->name_kategori)->first();
        
        if(!$kategori) {
            Kategori::create($data);
            Alert::success('Success', 'Kategori Berhasil Di Buat');
            return redirect()->route('admin.kategori');
        }

        
        Alert::info('Info', 'Maaf kategori Sudah Pernah DI Buat!');
        return redirect()->route('admin.kategori.create');
    }

    public function edit($id) {
        $items = Kategori::where('id', $id)->first();
        return view('admin.kategoricrud.edit-kategori', compact('items'));
    }

    public function update(Request $requests, $id) {
        $data = $requests->except('_token');
        
        $requests->validate([
            'name_kategori' => 'required'
        ]);

        $kategori = Kategori::where('name_kategori', $requests->name_kategori)->first();
        
        if(!$kategori) {
            $kategoriUpdate = Kategori::where('id', $id)->first();
            $kategoriUpdate->update($data);
            
            Alert::success('Success', 'Kategori Berhasil Di Edit');
            return redirect()->route('admin.kategori');
        }

        Alert::info('Info', 'Maaf kategori Sudah Pernah DI Buat!');
        return redirect()->route('admin.kategori.edit', $id);
    }

    public function delete($id) {
        $kategori = Kategori::where('id', $id)->first();
        $kategori->delete();
        Alert::success('Success', 'Kategori Berhasil Di Hapus');
        return redirect()->route('admin.kategori');
    }
}