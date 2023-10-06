<?php

namespace App\Filament\Widgets;

use Closure;
use Filament\Tables;
use App\Models\Wipsys\Workorder;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestOrders extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        return Workorder::query()->where('customer_code', '!=', 'SFT')->oldest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('number'),
            Tables\Columns\TextColumn::make('customer_code'),
            Tables\Columns\TextColumn::make('part_number'),
            Tables\Columns\TextColumn::make('process_code'),
            Tables\Columns\TextColumn::make('price'),
        ];
    }
}
