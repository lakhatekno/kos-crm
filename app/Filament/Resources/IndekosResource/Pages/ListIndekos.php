<?php

namespace App\Filament\Resources\IndekosResource\Pages;

use App\Filament\Resources\IndekosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndekos extends ListRecords
{
    protected static string $resource = IndekosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Kos'),
        ];
    }
}
