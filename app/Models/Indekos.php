<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Indekos extends Model
{
    protected $fillable = [
        'indekos_name',
        'indekos_address',
    ];

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
}