<?php

namespace App\Filament\Admin\Resources\RiwayatKesehatanResource\Pages;

use App\Filament\Admin\Resources\RiwayatKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatKesehatan extends EditRecord
{
    protected static string $resource = RiwayatKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
