<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
   protected $primaryKey = 'AddonCode';
   protected $fillable = ['AddonName', 'AddonPrice'];
   public $timestamps = false;
}
