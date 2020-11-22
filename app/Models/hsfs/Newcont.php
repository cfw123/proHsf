<?php

namespace App\Models\hsfs;

use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\hsfs\Newcont
 *
 * @property-read \App\Models\hsfs\Procate $cate
 * @property-read mixed $pro_pic
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Newcont newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Newcont newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\hsfs\Newcont onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Newcont query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\hsfs\Newcont withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\hsfs\Newcont withoutTrashed()
 * @mixin \Eloquent
 */
class Newcont extends Base
{
    use  SoftDeletes;
    protected $dates   = ['deleted_at'];
    // 分类  属于
    public function cate() {
        return $this->belongsTo(Newcate::class,'cid');
    }

    public function getList() {

        return self::orderBy('id', 'DESC')->paginate(5);
    }

    public function getProPicAttribute($value) {
        return env('APP_URL').$value;
    }
}
