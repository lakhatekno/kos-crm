<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    protected $fillable = [
        'id_indekos',
        'room_number',
        'price',
        'furnished',
        'private_restroom',
        'air_conditioner'
    ];

    public function indekos(): BelongsTo
    {
        return $this->belongsTo(Indekos::class, 'id_indekos');
    }

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
    
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
