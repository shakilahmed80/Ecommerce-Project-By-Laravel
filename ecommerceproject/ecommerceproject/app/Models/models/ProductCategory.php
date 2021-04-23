<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable=['brand_name',
    'status','slug'];

    public function products(){

        return $this->hasMany('App\models\Product');
}


}
