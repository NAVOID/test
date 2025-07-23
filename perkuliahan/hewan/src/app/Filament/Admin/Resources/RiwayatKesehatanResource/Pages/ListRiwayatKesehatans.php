<?php

namespace App\Filament\Admin\Resources\RiwayatKesehatanResource\Pages;

use App\Filament\Admin\Resources\RiwayatKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatKesehatans extends ListRecords
{
    protected static string $resource = RiwayatKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
