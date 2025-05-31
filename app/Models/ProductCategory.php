<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
   protected $table = 'ProductCategory';
   protected $primaryKey = 'ProdCatCode';
   protected $fillable = ['CategoryName'];
   public $timestamps = false;

   public function products()
   {
      return $this->hasMany(Product::class, 'ProdCatCode');
   }
}
