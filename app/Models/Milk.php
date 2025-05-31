<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Milk extends Model
{
   protected $primaryKey = 'MilkCode';
   protected $fillable = ['MilkName', 'MilkPrice'];
   public $timestamps = false;
}
