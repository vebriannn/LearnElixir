<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'tbl_course';

    protected $fillable = [
        'kategori',
        'title',
        'deskripsi',
        'mentor',
        'images',
        'link'
    ];
}