<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Kategori;

class KategoriController extends Controller
{
    public function store(Request $requests) {
        $data = $requests->except('_TOKEN');
        
        // dd($requests->all());
        $requests->validate([
            'name_kategori' => 'required'
        ]);

        $kategori = Kategori::where('name_kategori', $requests->name_kategori)->first();
        
        if(!$kategori) {
            Kategori::create($data);
            Alert::success('Success', 'Kategori Berhasil Di Buat');
        }
        
        Alert::info('Info', 'Maaf kategori Sudah Pernah DI Buat!');

        // return redirect()->route('admin.course');
    }
}