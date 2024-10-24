<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Productsubcategory extends Model
{

    use Translatable;
    protected $translatable = [
       'name'
    ];

    protected $guarded = [];


    // relashionship between product subcategory and product category
    public function paren_category(){
        return $this->belongsTo(Productcategory::class);
    }



}
