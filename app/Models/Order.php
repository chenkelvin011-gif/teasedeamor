<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_name',
        'customer_phone',
        'customer_email',
        'shipping_address',
        'city',
        'province',
        'postal_code',
        'courier',
        'shipping_cost',
        'subtotal',
        'discount',
        'voucher_code',
        'total_amount',
        'payment_method',
        'payment_status',
        'order_status',
        'tracking_number',
        'notes',
    ];

    protected $casts = [
        'shipping_cost' => 'integer',
        'subtotal' => 'integer',
        'discount' => 'integer',
        'total_amount' => 'integer',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getFormattedTotalAttribute()
    {
        return 'Rp ' . number_format($this->total_amount, 0, ',', '.');
    }

    public function getFormattedSubtotalAttribute()
    {
        return 'Rp ' . number_format($this->subtotal, 0, ',', '.');
    }

    public function getFormattedShippingCostAttribute()
    {
        return 'Rp ' . number_format($this->shipping_cost, 0, ',', '.');
    }
}
