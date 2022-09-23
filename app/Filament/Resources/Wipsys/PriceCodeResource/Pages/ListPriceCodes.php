<?php

namespace App\Filament\Resources\Wipsys\PriceCodeResource\Pages;

use App\Filament\Resources\Wipsys\PriceCodeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPriceCodes extends ListRecords
{
    protected static string $resource = PriceCodeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
