<?php

namespace App\Filament\Resources\Wipsys\QuoteResource\Pages;

use App\Filament\Resources\Wipsys\QuoteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuotes extends ListRecords
{
    protected static string $resource = QuoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
