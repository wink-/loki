<?php

namespace App\Filament\Resources\Wipsys\PartResource\Pages;

use App\Filament\Resources\Wipsys\PartResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParts extends ListRecords
{
    protected static string $resource = PartResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
