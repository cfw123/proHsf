<?php

namespace App\Models\hsfs;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\hsfs\Procate
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Procate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Procate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\hsfs\Procate query()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\hsfs\Procont[] $conts
 */
class Procate extends Model
{
    //

    protected $guarded=[];

    public function conts()
    {
       return $this->hasMany(Procont::class,'cid');
    }
}
