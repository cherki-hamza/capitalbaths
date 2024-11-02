<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Productcategory extends Model
{

    use Translatable;
    protected $translatable = [
       'name' , 'slug' , 'description'
    ];

    protected $guarded = [];


    // relashionship between project and subproject
    public function subcategories(){
        return $this->hasMany(Productsubcategory::class);
    }

    // relashionship between ProductSubcategory and Product
    public function products(){
        return $this->hasMany(Product::class);
    }

}
