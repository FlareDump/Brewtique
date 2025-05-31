<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
   protected $primaryKey = 'OrderID';
   protected $fillable = ['OrderDate'];
   public $timestamps = false;
}
