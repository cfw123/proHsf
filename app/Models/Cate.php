<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cate
 *
 * @property int $id
 * @property string $cname 分类名称
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cate whereCname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Cate extends Model
{
    // 黑名单
    protected $guarded = [];
}
