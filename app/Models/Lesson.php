<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Lesson
 *
 * @property int $id
 * @property int $cate_id 分类ID
 * @property int $course_id 课程ID
 * @property string $lname 课时名称
 * @property int $duration 时长 秒
 * @property string $url 播放地址
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereCateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereUrl($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Cate $cate
 * @property-read \App\Models\Course $course
 */
class Lesson extends Model
{
    // 黑名单
    protected $guarded = [];

    // 课程
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }

    // 分类
    public function cate() {
        return $this->belongsTo(Cate::class,'cate_id');
    }



    /**
     * Api get lesson
     * @param int $id  课程分类 course_id
     * @param int $offset
     * @param int $limit
     * @return mixed
     */
    public function leslist($id, $offset, $limit)
    {
       $data = self::where('course_id', $id)->offset($offset)->limit($limit)->get();
       return $data;
    }
}
