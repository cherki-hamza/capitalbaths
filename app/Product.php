<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use TCG\Voyager\Traits\Translatable;


class Product extends Model
{

    use Translatable;
    protected $translatable = ['name', 'description', 'specifications','product_specifications','product_description'];

    protected $guarded = [];

    // relashionship between product and cProductCategory
    public function category(){
        return $this->belongsTo(Productcategory::class,'productCategory_id','id');
    }

    // relashionship between product and ProductSubcategory
    public function subcategory(){
        return $this->belongsTo(Productsubcategory::class,'productSubcategory_id','id');
    }
    // relashionship between product and childrens

    // method for return price with design
    public function pruduct_price(){

        if (LaravelLocalization::getCurrentLocale() == 'ar'){
           return "<span class='new_price'> $this->price د.إ  </span>";
        }else{
            return "<span class='new_price'> AED $this->price </span>";
        }
    }

}
