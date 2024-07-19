<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Course;
use App\Models\Sources;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'tbl_lesson';

    protected $fillable = [
        'id_course',
        'title_lesson',
    ];

    public function course() {
        return $this->belongsTo(Course::class, 'id_course');
    }

    public function sources() {
        return $this->hasMany(Sources::class, 'id_lesson');
    }
}