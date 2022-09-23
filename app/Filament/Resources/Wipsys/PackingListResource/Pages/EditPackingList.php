<?php

namespace App\Filament\Resources\Wipsys\PackingListResource\Pages;

use App\Filament\Resources\Wipsys\PackingListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPackingList extends EditRecord
{
    protected static string $resource = PackingListResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
