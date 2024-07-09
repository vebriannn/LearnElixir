<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ApiCourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'avatar' => url(Storage::url('avatar/' . $this->avatar)),
            'mentor' =>$this->name,
            'divisi' =>$this->divisi,
            'course' => $this->course->map(function ($course) {
                return [
                    'kategori' => $course->kategori,
                    'title' => $course->title,
                    'slug' => $course->slug,
                    'deskripsi' => $course->deskripsi,
                    'images' => url(Storage::url('courseImages/' . $course->images)),
                    'link' => $course->link,
                    'duration' => $course->duration,
                    'total_lesson' => $course->total_lesson,
                    // Add other properties you need from the Course model
                ];
            })
        ];
    }
}