<?php

namespace App\Filament\Resources\Wipsys\MaterialResource\Pages;

use App\Filament\Resources\Wipsys\MaterialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaterial extends EditRecord
{
    protected static string $resource = MaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
