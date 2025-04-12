<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'merchandise_id',
        'quantity',
        'total_price',
        'status',
        'payment_proof',
        'shipping_address',
        'shipping_method',
        'tracking_number',
    ];

    protected $casts = [
        'total_price' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class);
    }
}

