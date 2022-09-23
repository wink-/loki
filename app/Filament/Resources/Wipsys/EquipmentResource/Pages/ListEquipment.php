<?php

namespace App\Filament\Resources\Wipsys\EquipmentResource\Pages;

use App\Filament\Resources\Wipsys\EquipmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEquipment extends ListRecords
{
    protected static string $resource = EquipmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
