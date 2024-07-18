<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\User;
use App\Models\Lesson;

class Course extends Model
{
    use Sluggable;
    use HasFactory;

    protected $table = 'tbl_course';
    
    protected $fillable = [
        'id_mentor',
        'kategori',
        'title',
        'deskripsi',
        'images',
        'duration',
        'total_lesson'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function lessons() {
        return $this->hasMany(Lesson::class, 'id_course');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_mentor');
    }

}