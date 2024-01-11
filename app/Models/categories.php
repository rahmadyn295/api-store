<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class categories extends Model
{
    protected $primaryKey = 'CategoryID';
    protected $table = 'categories';
    protected $fillable = [
        'CategoryID', 'CategoryName'
    ];
    protected $hidden = [];
}