<?php

namespace App\Filament\Resources\Wipsys\TagResource\Pages;

use App\Filament\Resources\Wipsys\TagResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTag extends EditRecord
{
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
