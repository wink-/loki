<?php

namespace App\Filament\Resources\Wipsys\PartResource\Pages;

use App\Filament\Resources\Wipsys\PartResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPart extends EditRecord
{
    protected static string $resource = PartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
