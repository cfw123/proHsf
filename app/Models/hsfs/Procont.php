<?php

namespace App\Models\hsfs;

use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\hsfs\Procont
 *
 * @property-read \App\Models\hsfs\Procate $cate
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Procont newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Procont newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Procont query()
 * @mixin \Eloquent
 */
class Procont extends Base
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
