<?php

namespace App\Filament\Resources\Wipsys\PartsBackupResource\Pages;

use App\Filament\Resources\Wipsys\PartsBackupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartsBackup extends EditRecord
{
    protected static string $resource = PartsBackupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
