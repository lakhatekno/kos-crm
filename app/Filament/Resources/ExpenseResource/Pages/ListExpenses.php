<?php

namespace App\Filament\Resources\ExpenseResource\Pages;

use App\Filament\Resources\ExpenseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExpenses extends ListRecords
{
    protected static string $resource = ExpenseResource::class;

    public function getTitle(): string
    {
        return 'Riwayat Pengeluaran';
    }

    public function getBreadcrumb(): string
    {
        return 'Riwayat Pengeluaran';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Catat Pengeluaran'),
        ];
    }
}
