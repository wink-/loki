<?php

namespace App\Filament\Resources\Wipsys\ProcedureResource\Pages;

use App\Filament\Resources\Wipsys\ProcedureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcedure extends EditRecord
{
    protected static string $resource = ProcedureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
