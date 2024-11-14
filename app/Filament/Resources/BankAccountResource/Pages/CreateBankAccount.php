<?php

namespace App\Filament\Resources\BankAccountResource\Pages;

use App\Filament\Resources\BankAccountResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBankAccount extends CreateRecord
{
    protected static string $resource = BankAccountResource::class;

    public function getTitle(): string
    {
        return 'Tambah Rekening';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Rekening';
    }
}
