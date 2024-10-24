<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Showroom extends Model
{
    use Translatable;
    protected $translatable = [
       'showroom_title' , 'showroom_description' , 'showroom_address'
    ];

    protected $guarded = [];

}
