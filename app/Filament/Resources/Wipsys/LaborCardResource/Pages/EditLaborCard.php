<?php

namespace App\Filament\Resources\Wipsys\LaborCardResource\Pages;

use App\Filament\Resources\Wipsys\LaborCardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaborCard extends EditRecord
{
    protected static string $resource = LaborCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
