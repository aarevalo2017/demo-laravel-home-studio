<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo',
        'precio',
        'stock',
        'category_id',
        'brand_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function marca()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function attributes(){
        return $this->hasMany(ProductAttribute::class);
    }
}
