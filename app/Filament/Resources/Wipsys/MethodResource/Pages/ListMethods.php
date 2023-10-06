<?php

namespace App\Filament\Resources\Wipsys\MethodResource\Pages;

use App\Filament\Resources\Wipsys\MethodResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMethods extends ListRecords
{
    protected static string $resource = MethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
