<?php

namespace App\Models;

use Walletable\Models\Transaction as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wallet_id',
        'session',
        'type',
        'amount',
        'balance',
        'currency',
        'action',
        'remarks',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'meta' => 'array',
        'created_at' => 'datetime'
    ];
}
