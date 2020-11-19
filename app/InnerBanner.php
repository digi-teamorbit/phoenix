<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InnerBanner extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inner_banners';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'image'];

    
}
