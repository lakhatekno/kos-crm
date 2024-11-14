<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransactions extends ListRecords
{
    protected static string $resource = TransactionResource::class;

    public function getTitle(): string
    {
        return 'Daftar Pembayaran'; // Ganti teks "List" dengan "Daftar Pembayaran"
    }

    public function getBreadcrumb(): string
    {
        return 'Daftar Pembayaran'; // Ganti "List" dengan teks yang Anda inginkan
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Pembayaran Baru'),
        ];
    }
}
