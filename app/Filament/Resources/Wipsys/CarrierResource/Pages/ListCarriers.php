<?php

namespace App\Filament\Resources\Wipsys\CarrierResource\Pages;

use App\Filament\Resources\Wipsys\CarrierResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarriers extends ListRecords
{
    protected static string $resource = CarrierResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
