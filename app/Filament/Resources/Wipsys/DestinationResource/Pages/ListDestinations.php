<?php

namespace App\Filament\Resources\Wipsys\DestinationResource\Pages;

use App\Filament\Resources\Wipsys\DestinationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDestinations extends ListRecords
{
    protected static string $resource = DestinationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
