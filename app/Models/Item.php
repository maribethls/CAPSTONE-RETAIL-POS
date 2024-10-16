<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'code',
        'barcode',
        'price',
        'status',
        'brand',
        'category',
        'subcategory',
    ];

    // Add a scope to filter out delisted items
    public function scopeActive($query)
    {
        return $query->where('status', '!=', 'delisted');
    }

}
