<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Brand extends Model
{

    use Translatable;
    protected $translatable = [
        'name' , 'slug' , 'description'
    ];

    protected $guarded = [];

}
