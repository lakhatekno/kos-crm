<?php

namespace App\Filament\Resources\CustomersResource\Pages;

use App\Filament\Resources\CustomersResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomers extends CreateRecord
{
    protected static string $resource = CustomersResource::class;

    public function getTitle(): string
    {
        return 'Tambah Penghuni';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Penghuni';
    }
}
