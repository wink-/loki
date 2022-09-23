<?php

namespace App\Filament\Resources\Wipsys\CustomerResource\Pages;

use App\Filament\Resources\Wipsys\CustomerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;
}
