<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseRes extends JsonResource
{
    /**
     * 课程
     */
    public function toArray($request) {
        return [
            'id' => $this->id,
            'name' => $this->course_name,
            'pic' => $this->course_pic,
            'price' => $this->course_price,
            'intro' => $this->course_intro,
            'cate' => new CateRes($this->cate)
        ];
    }

    // 额外参数
    public function with($request) {
        return [
            'status' => 0
        ];
    }
}
