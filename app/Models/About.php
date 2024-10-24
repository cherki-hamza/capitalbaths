<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class About extends Model
{

    use Translatable;
    protected $translatable = ['title','short_description','about_1','about_1_desc','about_2','about_2_desc','about_3','about_3_desc'];

    protected $guarded = [];

}
