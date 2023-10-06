<?php

namespace App\Filament\Resources\Wipsys\QualitycheckResource\Pages;

use App\Filament\Resources\Wipsys\QualitycheckResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQualitychecks extends ListRecords
{
    protected static string $resource = QualitycheckResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
