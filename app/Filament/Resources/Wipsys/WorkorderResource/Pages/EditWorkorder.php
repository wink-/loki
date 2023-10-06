<?php

namespace App\Filament\Resources\Wipsys\WorkorderResource\Pages;

use App\Filament\Resources\Wipsys\WorkorderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkorder extends EditRecord
{
    protected static string $resource = WorkorderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
