<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
    use Translatable;
    protected $translatable = [
        'title_1' , 'title_2' , 'title_3','description_1' , 'description_2' , 'description_3' , 'short_desc_1'
    ];

    protected $guarded = [];

}
