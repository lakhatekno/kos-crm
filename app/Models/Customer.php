<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $fillable = [
        'nik',
        'id_room',
        'customer_name',
        'customer_address',
        'check_in',
        'check_out'
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'id_room');
    } 
}
