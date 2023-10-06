<?php

namespace App\Filament\Resources\Wipsys\ProcedureResource\Pages;

use App\Filament\Resources\Wipsys\ProcedureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcedures extends ListRecords
{
    protected static string $resource = ProcedureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
