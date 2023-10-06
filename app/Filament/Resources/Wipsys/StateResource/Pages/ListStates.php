<?php

namespace App\Filament\Resources\Wipsys\StateResource\Pages;

use App\Filament\Resources\Wipsys\StateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStates extends ListRecords
{
    protected static string $resource = StateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
