<?php

namespace App\Filament\Admin\Resources\KandangResource\Pages;

use App\Filament\Admin\Resources\KandangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKandang extends EditRecord
{
    protected static string $resource = KandangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
