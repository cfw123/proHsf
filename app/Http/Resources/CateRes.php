<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CateRes extends JsonResource
{
    /**
     * 分类
     */
    public function toArray($request) {
        return [
            'cid' => $this->id,
            'cname' => $this->cname
        ];
    }

    // 额外参数
    public function with($request) {
        return [
            'status'=>0
        ];
    }
}
