<?php

namespace App\Filament\Resources\RoomsResource\Pages;

use App\Filament\Resources\RoomsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRooms extends CreateRecord
{
    protected static string $resource = RoomsResource::class;

    public function getTitle(): string
    {
        return 'Tambah Kamar'; // Ganti teks "List" dengan "Daftar Pembayaran"
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Kamar'; // Ganti "List" dengan teks yang Anda inginkan
    }
}
