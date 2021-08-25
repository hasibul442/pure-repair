<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['p_name',
    'price',
    'brand_id',
    'cat_id',
    'slug',
    'image',
    'description',
    'status'];

    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
