<?php

namespace App\Filament\Resources\Wipsys\WorkorderhistoryResource\Pages;

use App\Filament\Resources\Wipsys\WorkorderhistoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkorderhistories extends ListRecords
{
    protected static string $resource = WorkorderhistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
