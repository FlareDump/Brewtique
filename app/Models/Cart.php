<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // Specify the table name if not the plural of the model name
    protected $table = 'cart';

    // Allow mass assignment for these fields
    protected $fillable = [
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

    // Disable timestamps if not using created_at/updated_at
    public $timestamps = false;

    protected $primaryKey = 'cartID'; // Set primary key to cartID
    public $incrementing = true;
    protected $keyType = 'int';
}
