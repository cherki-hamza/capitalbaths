<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Project extends Model
{

    use Translatable;
    protected $translatable = [
       'project_name'
    ];

    // relashionship between project and subproject
    public function subprojects(){
        return $this->hasMany(Subproject::class);
    }

}
