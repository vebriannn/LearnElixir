<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kategori;

class KategoriController extends Controller
{
    public function store(Request $requests) {

        $data = $requests->except('_TOKEN');
        
        $requests->validate([
            'name_kategori'
        ]);

        $kategori = Kategori::where('name_kategori', $requests->name_kategori)->first();

        if(!$kategori) {
            Kategori::create($data);
        }

    }
}