<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
   protected $table = 'Orders';
   protected $primaryKey = 'OrderID';
   public $incrementing = true;
   protected $keyType = 'int';
   public $timestamps = false;

   protected $fillable = [
      'cartID',
      'ImagePath',
      'ProductName',
      'ProdPrice',
      'CupSize',
      'CupSizePrice',
      'Milk',
      'MilkPrice',
      'Addon',
      'AddonPrice',
      'Quantity',
      'TotalPrice',
      'PurchaseDate',
   ];
}
