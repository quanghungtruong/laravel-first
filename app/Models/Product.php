<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $fillable=['id','pro_name','cat_id'];
    public $timestamps=false;

    public function reCategory(){
        return $this->belongsTo('App\Models\Category','cat_id');
    }

}
