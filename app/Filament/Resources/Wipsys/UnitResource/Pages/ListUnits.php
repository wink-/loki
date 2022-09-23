<?php

namespace App\Filament\Resources\Wipsys\UnitResource\Pages;

use App\Filament\Resources\Wipsys\UnitResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnits extends ListRecords
{
    protected static string $resource = UnitResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
