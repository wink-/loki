<?php

namespace App\Filament\Resources\Wipsys\CustomerResource\Pages;

use App\Filament\Resources\Wipsys\CustomerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomer extends EditRecord
{
    protected static string $resource = CustomerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
