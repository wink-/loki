<?php

namespace App\Filament\Resources\Wipsys\LaborCardResource\Pages;

use App\Filament\Resources\Wipsys\LaborCardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaborCards extends ListRecords
{
    protected static string $resource = LaborCardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
