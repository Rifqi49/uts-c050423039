<?php

namespace App\Filament\Resources\LaporanDonasiResource\Pages;

use App\Filament\Resources\LaporanDonasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanDonasi extends EditRecord
{
    protected static string $resource = LaporanDonasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
