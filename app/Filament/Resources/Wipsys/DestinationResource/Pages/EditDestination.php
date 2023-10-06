<?php

namespace App\Filament\Resources\Wipsys\DestinationResource\Pages;

use App\Filament\Resources\Wipsys\DestinationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDestination extends EditRecord
{
    protected static string $resource = DestinationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
