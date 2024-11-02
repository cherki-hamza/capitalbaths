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
    public function parent_category(){
        return $this->belongsTo(Productcategory::class,'productcategory_id' , 'id');
    }

    // relashionship between product subcategory and product Childrens categories
    public function childrens_categories(){
        return $this->hasMany(Childrenscategory::class);
    }



}
