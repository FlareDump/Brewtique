<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
   protected $primaryKey = 'OrderItemID';
   protected $fillable = [
      'OrderID',
      'ProdCatCode',
      'ProdPrice',
      'MilkCode',
      'MilkPrice',
      'AddonCode',
      'AddonPrice',
      'Quantity',
      'Size',
      'SizePrice'
   ];
   public $timestamps = false;
}
