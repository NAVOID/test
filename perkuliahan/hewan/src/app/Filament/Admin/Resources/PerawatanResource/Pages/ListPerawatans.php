<?php

namespace App\Filament\Admin\Resources\PerawatanResource\Pages;

use App\Filament\Admin\Resources\PerawatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerawatans extends ListRecords
{
    protected static string $resource = PerawatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
