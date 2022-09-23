<?php

namespace App\Filament\Resources\Wipsys\FreightResource\Pages;

use App\Filament\Resources\Wipsys\FreightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFreight extends EditRecord
{
    protected static string $resource = FreightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
