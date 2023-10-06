<?php

namespace App\Filament\Resources\Wipsys\PackingListResource\Pages;

use App\Filament\Resources\Wipsys\PackingListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPackingList extends EditRecord
{
    protected static string $resource = PackingListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
