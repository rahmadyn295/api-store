<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class users extends Model
{
    protected $primaryKey = 'UserID';
    protected $table = 'users';
    protected $fillable = [
        'UserID', 'Username', 'Email', 'Password',
    ];
    protected $hidden = [];
}