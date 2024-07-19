<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Lesson;

class Sources extends Model
{
    use HasFactory;

    protected $table = 'tbl_sources';

    protected $fillable = [
        'id_lesson',
        'name_source',
        'time_source',
        'link_source',
    ];

    public function lessons() {
        return $this->belongsTo(Lesson::class, 'id_lesson');
    }
}