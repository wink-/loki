<?php

namespace App\Filament\Resources\Wipsys\PartsBackupResource\Pages;

use App\Filament\Resources\Wipsys\PartsBackupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartsBackups extends ListRecords
{
    protected static string $resource = PartsBackupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
