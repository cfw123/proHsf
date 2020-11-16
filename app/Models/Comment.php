<?php

namespace App\Models;


/**
 * App\Models\Comment
 *
 * @property int $id
 * @property string $openid 用户的openid
 * @property int $lid 课时ID
 * @property string $info 内容
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereLid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Comment extends Base
{
    //
}
