<?php

namespace App\Filament\Resources\Wipsys\UpsResource\Pages;

use App\Filament\Resources\Wipsys\UpsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUps extends EditRecord
{
    protected static string $resource = UpsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
