<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransaction extends EditRecord
{
    protected static string $resource = TransactionResource::class;

    public function getTitle(): string
    {
        return 'Ubah Detail Pembayaran'; // Ganti teks "List" dengan "Daftar Pembayaran"
    }

    public function getBreadcrumb(): string
    {
        return 'Ubah Detail Pembayaran'; // Ganti "List" dengan teks yang Anda inginkan
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Hapus Data Pembayaran'),
        ];
    }
}
