<?php

namespace App\Filament\Resources\Wipsys\WorkorderhistoryResource\Pages;

use App\Filament\Resources\Wipsys\WorkorderhistoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkorderhistory extends EditRecord
{
    protected static string $resource = WorkorderhistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
