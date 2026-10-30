<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'collection',
        'tagline',
        'description',
        'price',
        'original_price',
        'badge',
        'color_name',
        'color_code',
        'sizes',
        'stock',
        'image_url',
        'gallery_urls',
        'fabric_details',
        'is_featured',
    ];

    protected $casts = [
        'sizes' => 'array',
        'gallery_urls' => 'array',
        'price' => 'integer',
        'original_price' => 'integer',
        'stock' => 'integer',
        'is_featured' => 'boolean',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    public function getFormattedOriginalPriceAttribute()
    {
        return 'Rp ' . number_format($this->original_price, 0, ',', '.');
    }
}
