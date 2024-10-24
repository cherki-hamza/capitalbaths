<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Childrenscategory extends Model
{
    use Translatable;
    protected $translatable = [
       'name'
    ];

    protected $guarded = [];

}
