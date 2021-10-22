<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_amount',
        'user_id',
        'product_id'
    ];

    protected $casts = [
        'product_amount' => 'integer',
        'user_id' => 'integer',
        'product_id' => 'integer'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
