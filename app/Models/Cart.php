<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'ProductName',
        'ImagePath',
        'ProdPrice',
        'CupSize',
        'CupSizePrice',
        'Milk',
        'MilkPrice',
        'Addon',
        'AddonPrice',
        'Quantity',
        'TotalPrice',
        'AddedAt',
    ];

    public $timestamps = false;

    protected $primaryKey = 'cartID';
    public $incrementing = true;
    protected $keyType = 'int';
}
