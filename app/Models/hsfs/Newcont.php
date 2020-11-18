<?php

namespace App\Models\hsfs;

use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newcont extends Base
{
    use  SoftDeletes;
    protected $dates   = ['deleted_at'];
    // 分类  属于
    public function cate() {
        return $this->belongsTo(Procate::class,'cid');
    }

    public function getList() {

        return self::orderBy('id', 'DESC')->paginate(5);
    }

    public function getProPicAttribute($value) {
        return env('APP_URL').$value;
    }
}
