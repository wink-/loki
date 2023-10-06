<?php

namespace App\Filament\Resources\Wipsys\StateResource\Pages;

use App\Filament\Resources\Wipsys\StateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditState extends EditRecord
{
    protected static string $resource = StateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
