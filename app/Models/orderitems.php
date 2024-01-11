<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class orderitems extends Model
{
    protected $primaryKey = 'OrderItemsID';
    protected $table = 'orderitems';
    protected $fillable = [
        'OrderItemsID', 'OrderID', 'ProductID', 'Quantity','Subtotal',
    ];
    protected $hidden = [];
}