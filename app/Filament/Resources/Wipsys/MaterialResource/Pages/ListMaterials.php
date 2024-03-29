<?php

namespace App\Filament\Resources\Wipsys\MaterialResource\Pages;

use App\Filament\Resources\Wipsys\MaterialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaterials extends ListRecords
{
    protected static string $resource = MaterialResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
