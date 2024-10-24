<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Subproject extends Model
{

    use Translatable;
    protected $translatable = [
       'sub_project_name'
    ];

    protected $guarded = [];

    // relationship between subproject and project
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
