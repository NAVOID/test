<?php

namespace App\Filament\Admin\Resources\PerawatanResource\Pages;

use App\Filament\Admin\Resources\PerawatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerawatan extends EditRecord
{
    protected static string $resource = PerawatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
