<?php

namespace App\Filament\Resources\LaporanDonasiResource\Pages;

use App\Filament\Resources\LaporanDonasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanDonasis extends ListRecords
{
    protected static string $resource = LaporanDonasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
