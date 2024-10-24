<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Slider extends Model
{
    use Translatable;
    protected $translatable = [
       'slider_title' , 'slider_description'
    ];

    protected $guarded = [];

}
