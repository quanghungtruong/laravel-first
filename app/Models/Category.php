<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';
    protected $fillable=['id','cat_name'];

    public function reProduct(){
        return $this->hasMany('App\Models\Product','cat_id');
    }

}
