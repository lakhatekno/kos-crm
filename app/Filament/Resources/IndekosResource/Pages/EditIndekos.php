<?php

namespace App\Filament\Resources\IndekosResource\Pages;

use App\Filament\Resources\IndekosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndekos extends EditRecord
{
    protected static string $resource = IndekosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Hapus Kos'),
        ];
    }
}
