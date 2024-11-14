<?php

namespace App\Filament\Resources\IndekosResource\Pages;

use App\Filament\Resources\IndekosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndekos extends ListRecords
{
    protected static string $resource = IndekosResource::class;

    public function getTitle(): string
    {
        return 'Daftar Kos';
    }

    public function getBreadcrumb(): string
    {
        return 'Daftar Kos';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Kos'),
        ];
    }
}
