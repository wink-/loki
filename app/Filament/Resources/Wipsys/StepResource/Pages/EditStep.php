<?php

namespace App\Filament\Resources\Wipsys\StepResource\Pages;

use App\Filament\Resources\Wipsys\StepResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStep extends EditRecord
{
    protected static string $resource = StepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
