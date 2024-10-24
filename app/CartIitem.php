<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class CartIitem extends Model
{
    use Translatable;
    protected $translatable = [

    ];

    protected $guarded = [];

}
