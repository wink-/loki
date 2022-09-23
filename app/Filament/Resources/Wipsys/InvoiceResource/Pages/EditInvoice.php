<?php

namespace App\Filament\Resources\Wipsys\InvoiceResource\Pages;

use App\Filament\Resources\Wipsys\InvoiceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvoice extends EditRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
