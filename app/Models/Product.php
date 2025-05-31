<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'Product';
   protected $primaryKey = 'ProdCode';
   protected $fillable = ['ProdName', 'ProdCatCode', 'Stock', 'ProdPrice', 'ImagePath'];
   public $timestamps = false;

   public function category()
   {
      return $this->belongsTo(ProductCategory::class, 'ProdCatCode');
   }
}
