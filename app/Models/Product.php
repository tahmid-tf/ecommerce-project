<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public function getProductImageAttribute($value){
//        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
//            return $value;
//        }
//        return asset('storage/'.$value);
//    }

    public function image(){
        return $this->hasMany(Image::class);
    }

    public function setProductCategoryAttribute($value){
        $this->attributes['product_category'] = Str::lower($value);
    }

    // public function getProductCategoryAttribute($value){
    //     return Str::lower($value);
    // }
}
