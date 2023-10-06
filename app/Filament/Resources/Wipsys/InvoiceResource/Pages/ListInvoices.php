<?php

namespace App\Filament\Resources\Wipsys\InvoiceResource\Pages;

use App\Filament\Resources\Wipsys\InvoiceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInvoices extends ListRecords
{
    protected static string $resource = InvoiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
