<?php

namespace App\Filament\Resources\Wipsys\PriceCodeResource\Pages;

use App\Filament\Resources\Wipsys\PriceCodeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPriceCode extends EditRecord
{
    protected static string $resource = PriceCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
