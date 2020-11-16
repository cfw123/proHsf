<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Base
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base query()
 * @mixin \Eloquent
 */
	class Base extends \Eloquent {}
}

namespace App\Models{
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
	class Cate extends \Eloquent {}
}

namespace App\Models{
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
	class Comment extends \Eloquent {}
}

namespace App\Models{
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
	class Course extends \Eloquent {}
}

namespace App\Models{
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
	class Lesson extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property int $pid 上级ID
 * @property string $name 权限名称
 * @property string|null $routename 权限名称
 * @property string $is_menu 是否为菜单
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereIsMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereRoutename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $role_name 角色名称
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereRoleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $auths
 * @property-read int|null $auths_count
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int $role_id 角色ID
 * @property string $username 用户名
 * @property string $password 密码
 * @property string $email 邮箱
 * @property string $openid openid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $remember_token
 * @property-read \App\Models\Role $role
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User withoutTrashed()
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUsername($value)
 * @mixin \Eloquent
 * @property int $role_id 角色ID
 * @property string $email 邮箱
 * @property string $openid openid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $remember_token
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

