<?php

namespace App\Filament\Resources\Wipsys\QuoteResource\Pages;

use App\Filament\Resources\Wipsys\QuoteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuote extends EditRecord
{
    protected static string $resource = QuoteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
