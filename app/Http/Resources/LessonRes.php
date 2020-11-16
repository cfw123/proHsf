<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LessonRes extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) {
        return [
            'id' => $this->id,
            'coname' => new CourseRes($this->course),
            'name' => $this->lname,
            'url' => $this->url
        ];
    }

    // 额外参数
    public function with($request) {
        return [
            'status'=>0
        ];
    }
}
