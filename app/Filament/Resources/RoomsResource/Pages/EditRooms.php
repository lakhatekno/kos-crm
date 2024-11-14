<?php

namespace App\Filament\Resources\RoomsResource\Pages;

use App\Filament\Resources\RoomsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRooms extends EditRecord
{
    protected static string $resource = RoomsResource::class;

    public function getTitle(): string
    {
        return 'Ubah Detail Kamar'; // Ganti teks "List" dengan "Daftar Pembayaran"
    }

    public function getBreadcrumb(): string
    {
        return 'Ubah Detail Kamar'; // Ganti "List" dengan teks yang Anda inginkan
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Hapus'),
        ];
    }
}
