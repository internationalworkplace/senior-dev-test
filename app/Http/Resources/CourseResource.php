<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin \App\Models\Course */class CourseResource extends JsonResource{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
'title' => $this->title,
'description' => $this->description,
'slug' => $this->slug,
'created_at' => $this->created_at,
'updated_at' => $this->updated_at,//
        ];
    }
}
