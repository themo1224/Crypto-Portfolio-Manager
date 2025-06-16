<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Portfolio extends Model
{
    protected $fillable = [
        'user_id',
        'token_name',
        'token_symbol',
        'quantity',
        'price',
    ];

    /**
     * The user who owns this portfolio.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
{
    static::creating(function ($portfolio) {
        $portfolio->user_id = Auth::id(); // Automatically associate the portfolio with the logged-in user
    });
}
}
