<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class products extends Model
{
    protected $primaryKey = 'ProductID';
    protected $table = 'products';
    protected $fillable = [
        'ProductID', 'ProductName', 'Price', 'StockQuantity','CategoryID',
    ];
    protected $hidden = [];
}