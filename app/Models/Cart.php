<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   protected $primaryKey = 'CartID';
   protected $fillable = [
      'UserID',
      'ProdCatCode',
      'ProdPrice',
      'MilkCode',
      'MilkPrice',
      'AddonCode',
      'AddonPrice',
      'Quantity',
      'Size',
      'SizePrice',
      'AddedAt'
   ];
   public $timestamps = false;
}
