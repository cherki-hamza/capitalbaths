<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Review extends Model
{

    use Translatable;
    protected $translatable = [
       'review_content'
    ];

}
