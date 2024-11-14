<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    protected $fillable = [
        'id',
        'id_indekos',
        'id_category',
        'expense_date',
        'expense_value',
        'id_bank_account',
        'note',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ExpenseCategory::class);
    }
}
