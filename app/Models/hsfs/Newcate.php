<?php

namespace App\Models\hsfs;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\hsfs\Newcate
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Newcate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Newcate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Newcate query()
 * @mixin \Eloquent
 */
class Newcate extends Model
{
    protected $guarded=[];

    public function news()
    {
       return  $this->hasMany(Newcont::class,'cid');
    }
}
