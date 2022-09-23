<?php

namespace App\Filament\Resources\Wipsys\PriorityResource\Pages;

use App\Filament\Resources\Wipsys\PriorityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPriority extends EditRecord
{
    protected static string $resource = PriorityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
