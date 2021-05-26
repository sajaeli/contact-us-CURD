<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contcat extends Model
{
    protected $fillable = [
        'FName', 'LName', 'Email',
    ];
}
