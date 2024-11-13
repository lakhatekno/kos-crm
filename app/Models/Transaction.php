<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'id_customer',
        'id_room',
        'transaction_date',
        'transaction_value',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'id_room');
    }
}
