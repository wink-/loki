<?php

namespace App\Filament\Resources\Wipsys\PartshistoryResource\Pages;

use App\Filament\Resources\Wipsys\PartshistoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartshistories extends ListRecords
{
    protected static string $resource = PartshistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
