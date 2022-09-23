<?php

namespace App\Filament\Resources\Wipsys\MethodResource\Pages;

use App\Filament\Resources\Wipsys\MethodResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMethod extends EditRecord
{
    protected static string $resource = MethodResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
