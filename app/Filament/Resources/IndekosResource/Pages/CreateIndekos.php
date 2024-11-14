<?php

namespace App\Filament\Resources\IndekosResource\Pages;

use App\Filament\Resources\IndekosResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIndekos extends CreateRecord
{
    protected static string $resource = IndekosResource::class;

    public function getTitle(): string
    {
        return 'Tambah Kos';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Kos';
    }
}
