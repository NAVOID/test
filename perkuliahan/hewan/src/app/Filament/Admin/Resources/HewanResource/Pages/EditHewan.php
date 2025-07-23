<?php

namespace App\Filament\Admin\Resources\HewanResource\Pages;

use App\Filament\Admin\Resources\HewanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHewan extends EditRecord
{
    protected static string $resource = HewanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
