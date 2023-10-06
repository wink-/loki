<?php

namespace App\Filament\Resources\Wipsys\WorkgroupResource\Pages;

use App\Filament\Resources\Wipsys\WorkgroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkgroups extends ListRecords
{
    protected static string $resource = WorkgroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
