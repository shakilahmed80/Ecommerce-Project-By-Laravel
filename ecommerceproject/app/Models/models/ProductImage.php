<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable=['img_title','img','status','slug','product_id'];

   public function products(){

    return $this->belongsTo('App\models\Product');
   }

}
