<?php

namespace App\Models;

use App\Models\Variant;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'stock',
        'description'
    ];
}
