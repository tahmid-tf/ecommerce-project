<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getNameAttribute($value){
        return ucfirst($value);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = Str::lower($value);
    }

}
