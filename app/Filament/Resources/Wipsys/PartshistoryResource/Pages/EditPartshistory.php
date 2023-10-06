<?php

namespace App\Filament\Resources\Wipsys\PartshistoryResource\Pages;

use App\Filament\Resources\Wipsys\PartshistoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartshistory extends EditRecord
{
    protected static string $resource = PartshistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
