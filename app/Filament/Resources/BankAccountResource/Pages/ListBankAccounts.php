<?php

namespace App\Filament\Resources\BankAccountResource\Pages;

use App\Filament\Resources\BankAccountResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBankAccounts extends ListRecords
{
    protected static string $resource = BankAccountResource::class;

    public function getTitle(): string
    {
        return 'Daftar Rekening';
    }

    public function getBreadcrumb(): string
    {
        return 'Daftar Rekening';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Rekening'),
        ];
    }
}
