<?php

namespace App\Filament\Resources\CustomersResource\Pages;

use App\Filament\Resources\CustomersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomers extends EditRecord
{
    protected static string $resource = CustomersResource::class;

    public function getTitle(): string
    {
        return 'Ubah Detail Penghuni';
    }

    public function getBreadcrumb(): string
    {
        return 'Ubah Detail Penghuni';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Hapus Data'),
        ];
    }
}
