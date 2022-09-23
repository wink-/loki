<?php

namespace App\Filament\Resources\Wipsys\ProcessResource\Pages;

use App\Filament\Resources\Wipsys\ProcessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcesses extends ListRecords
{
    protected static string $resource = ProcessResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
