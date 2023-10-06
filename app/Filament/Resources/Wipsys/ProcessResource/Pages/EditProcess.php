<?php

namespace App\Filament\Resources\Wipsys\ProcessResource\Pages;

use App\Filament\Resources\Wipsys\ProcessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcess extends EditRecord
{
    protected static string $resource = ProcessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
