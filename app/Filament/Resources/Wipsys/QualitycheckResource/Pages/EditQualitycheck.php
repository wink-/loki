<?php

namespace App\Filament\Resources\Wipsys\QualitycheckResource\Pages;

use App\Filament\Resources\Wipsys\QualitycheckResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQualitycheck extends EditRecord
{
    protected static string $resource = QualitycheckResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
