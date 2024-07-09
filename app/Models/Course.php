<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\User;

class Course extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'tbl_course';

    protected $fillable = [
        'id_mentor',
        'kategori',
        'title',
        'deskripsi',
        'images',
        'link',
        'duration',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_mentor');
    }

    
}