<?php

namespace App\Filament\Resources\Wipsys\WorkgroupResource\Pages;

use App\Filament\Resources\Wipsys\WorkgroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkgroup extends EditRecord
{
    protected static string $resource = WorkgroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
