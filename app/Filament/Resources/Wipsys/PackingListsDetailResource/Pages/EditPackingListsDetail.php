<?php

namespace App\Filament\Resources\Wipsys\PackingListsDetailResource\Pages;

use App\Filament\Resources\Wipsys\PackingListsDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPackingListsDetail extends EditRecord
{
    protected static string $resource = PackingListsDetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
