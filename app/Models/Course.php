<?php

namespace App\Models;


/**
 * App\Models\Course
 *
 * @property int $id
 * @property int $cid 分类ID
 * @property string $course_name 课程名称
 * @property string $course_pic 课程封面
 * @property string $course_intro 课程简介
 * @property float $course_price 课程价格
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Cate $cate
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCourseIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCourseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCoursePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCoursePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Course extends Base
{

    // 分类  属于
    public function cate() {
        return $this->belongsTo(Cate::class,'cid');
    }

    public function getList() {
        return self::paginate(10);
    }

    public function getCoursePicAttribute($value) {
        return env('APP_URL').$value;
    }

}