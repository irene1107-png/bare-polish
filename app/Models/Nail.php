<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nail extends Model
{
    protected $fillable = [
        'title',
        'price',
        'image'
    ];
}