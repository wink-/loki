<?php

namespace App\Filament\Resources\Wipsys\CustomerResource\Pages;

use App\Filament\Resources\Wipsys\CustomerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
