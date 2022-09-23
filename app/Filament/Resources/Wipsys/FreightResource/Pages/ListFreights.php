<?php

namespace App\Filament\Resources\Wipsys\FreightResource\Pages;

use App\Filament\Resources\Wipsys\FreightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFreights extends ListRecords
{
    protected static string $resource = FreightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
