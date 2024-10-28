<?php

namespace App\Filament\Resources\KategoriDonasiResource\Pages;

use App\Filament\Resources\KategoriDonasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriDonasis extends ListRecords
{
    protected static string $resource = KategoriDonasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
