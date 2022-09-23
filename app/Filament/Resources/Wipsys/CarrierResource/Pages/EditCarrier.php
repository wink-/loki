<?php

namespace App\Filament\Resources\Wipsys\CarrierResource\Pages;

use App\Filament\Resources\Wipsys\CarrierResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarrier extends EditRecord
{
    protected static string $resource = CarrierResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
