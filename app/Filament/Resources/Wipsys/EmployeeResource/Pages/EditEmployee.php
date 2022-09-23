<?php

namespace App\Filament\Resources\Wipsys\EmployeeResource\Pages;

use App\Filament\Resources\Wipsys\EmployeeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployee extends EditRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
