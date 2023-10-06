<?php

namespace App\Filament\Resources\Wipsys\PackingListsDetailResource\Pages;

use App\Filament\Resources\Wipsys\PackingListsDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPackingListsDetails extends ListRecords
{
    protected static string $resource = PackingListsDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
