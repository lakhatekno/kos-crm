<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTransaction extends CreateRecord
{
    protected static string $resource = TransactionResource::class;
    
    public function getTitle(): string
    {
        return 'Pembayaran Baru'; // Ganti teks "List" dengan "Daftar Pembayaran"
    }

    public function getBreadcrumb(): string
    {
        return 'Pembayaran Baru'; // Ganti "List" dengan teks yang Anda inginkan
    }
}
