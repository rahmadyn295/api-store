<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class orders extends Model
{
    protected $primaryKey = 'OrderID';
    protected $table = 'orders';
    protected $fillable = [
        'OrderID', 'UserID', 'OrderDate', 'TotalAmount',
    ];
    protected $hidden = [];
}