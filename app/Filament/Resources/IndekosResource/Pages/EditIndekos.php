<?php

namespace App\Filament\Resources\IndekosResource\Pages;

use App\Filament\Resources\IndekosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndekos extends EditRecord
{
    protected static string $resource = IndekosResource::class;

    public function getTitle(): string
    {
        return 'Ubah Detail Kos';
    }

    public function getBreadcrumb(): string
    {
        return 'Ubah Detail Kos';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Hapus Kos'),
        ];
    }
}
