<?php

namespace App\Filament\Resources\Wipsys\EmployeeResource\Pages;

use App\Filament\Resources\Wipsys\EmployeeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;
}
