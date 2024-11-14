<?php

namespace App\Filament\Resources\CustomersResource\Pages;

use App\Filament\Resources\CustomersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomersResource::class;

    public function getTitle(): string
    {
        return 'Daftar Penghuni';
    }

    public function getBreadcrumb(): string
    {
        return 'Daftar Penghuni';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Penghuni'),
        ];
    }
}
