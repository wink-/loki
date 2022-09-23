<?php

namespace App\Filament\Resources\Wipsys\EquipmentResource\Pages;

use App\Filament\Resources\Wipsys\EquipmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEquipment extends EditRecord
{
    protected static string $resource = EquipmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
