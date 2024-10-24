<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Colection extends Model
{

    use Translatable;
    protected $translatable = ['colection_name'];

    protected $guarded = [];

}
