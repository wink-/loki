<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\WorkorderhistoryResource\Pages;
use App\Filament\Resources\Wipsys\WorkorderhistoryResource\RelationManagers;
use App\Models\Wipsys\Workorderhistory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkorderhistoryResource extends Resource
{
    protected static ?string $model = Workorderhistory::class;

    protected static ?string $navigationGroup = 'WipSys';    

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number'),
                Forms\Components\TextInput::make('customer_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('customer_name')
                    ->maxLength(228),
                Forms\Components\TextInput::make('part_id'),
                Forms\Components\TextInput::make('part_number')
                    ->maxLength(228),
                Forms\Components\TextInput::make('process_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('price'),
                Forms\Components\TextInput::make('price_code')
                    ->maxLength(10),
                Forms\Components\DateTimePicker::make('date_received'),
                Forms\Components\DateTimePicker::make('date_required'),
                Forms\Components\TextInput::make('customer_purchase_order')
                    ->maxLength(15),
                Forms\Components\TextInput::make('customer_packing_list')
                    ->maxLength(15),
                Forms\Components\TextInput::make('quantity'),
                Forms\Components\TextInput::make('unit_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('quantity_shipped'),
                Forms\Components\TextInput::make('our_last_packing_list'),
                Forms\Components\TextInput::make('destination_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('carrier_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('freight_code')
                    ->maxLength(10),
                Forms\Components\DateTimePicker::make('date_shipped'),
                Forms\Components\TextInput::make('shipped_amount'),
                Forms\Components\TextInput::make('inventory_amount'),
                Forms\Components\TextInput::make('invoice_number'),
                Forms\Components\DateTimePicker::make('invoice_date'),
                Forms\Components\TextInput::make('invoice_amount'),
                Forms\Components\TextInput::make('priority'),
                Forms\Components\Toggle::make('rework'),
                Forms\Components\Toggle::make('hot'),
                Forms\Components\Toggle::make('started'),
                Forms\Components\Toggle::make('completed')
                    ->required(),
                Forms\Components\Toggle::make('shipped'),
                Forms\Components\Toggle::make('cod'),
                Forms\Components\Toggle::make('invoiced'),
                Forms\Components\Textarea::make('note')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('STEPNAME1')
                    ->maxLength(8),
                Forms\Components\TextInput::make('TMANHRS1'),
                Forms\Components\TextInput::make('TOTHOURS1'),
                Forms\Components\TextInput::make('STEPNAME2')
                    ->maxLength(8),
                Forms\Components\TextInput::make('TMANHRS2'),
                Forms\Components\TextInput::make('TOTHOURS2'),
                Forms\Components\TextInput::make('STEPNAME3')
                    ->maxLength(8),
                Forms\Components\TextInput::make('TMANHRS3'),
                Forms\Components\TextInput::make('TOTHOURS3'),
                Forms\Components\TextInput::make('image_count'),
                Forms\Components\TextInput::make('session_id')
                    ->maxLength(228),
                Forms\Components\Toggle::make('archive')
                    ->required(),
                Forms\Components\TextInput::make('revision'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('customer_code')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('customer_name')->searchable()->sortable(),
                // Tables\Columns\TextColumn::make('part_id'),
                Tables\Columns\TextColumn::make('part_number')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('process_code')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('price_code'),
                Tables\Columns\TextColumn::make('date_received')
                    ->dateTime(),
                // Tables\Columns\TextColumn::make('date_required')
                //     ->dateTime(),
                Tables\Columns\TextColumn::make('customer_purchase_order')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('customer_packing_list')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('quantity')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('unit_code'),
                Tables\Columns\TextColumn::make('quantity_shipped'),
                Tables\Columns\TextColumn::make('our_last_packing_list'),
                // Tables\Columns\TextColumn::make('destination_code'),
                // Tables\Columns\TextColumn::make('carrier_code'),
                // Tables\Columns\TextColumn::make('freight_code'),
                Tables\Columns\TextColumn::make('date_shipped')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('shipped_amount'),
                Tables\Columns\TextColumn::make('inventory_amount'),
                Tables\Columns\TextColumn::make('invoice_number'),
                Tables\Columns\TextColumn::make('invoice_date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('invoice_amount'),
                // Tables\Columns\TextColumn::make('priority'),
                // Tables\Columns\BooleanColumn::make('rework'),
                // Tables\Columns\BooleanColumn::make('hot'),
                // Tables\Columns\BooleanColumn::make('started'),
                // Tables\Columns\BooleanColumn::make('completed'),
                // Tables\Columns\BooleanColumn::make('shipped'),
                // Tables\Columns\BooleanColumn::make('cod'),
                // Tables\Columns\BooleanColumn::make('invoiced'),
                // Tables\Columns\TextColumn::make('note'),
                // Tables\Columns\TextColumn::make('STEPNAME1'),
                // Tables\Columns\TextColumn::make('TMANHRS1'),
                // Tables\Columns\TextColumn::make('TOTHOURS1'),
                // Tables\Columns\TextColumn::make('STEPNAME2'),
                // Tables\Columns\TextColumn::make('TMANHRS2'),
                // Tables\Columns\TextColumn::make('TOTHOURS2'),
                // Tables\Columns\TextColumn::make('STEPNAME3'),
                // Tables\Columns\TextColumn::make('TMANHRS3'),
                // Tables\Columns\TextColumn::make('TOTHOURS3'),
                // Tables\Columns\TextColumn::make('image_count'),
                // Tables\Columns\TextColumn::make('session_id'),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
                // Tables\Columns\BooleanColumn::make('archive'),
                // Tables\Columns\TextColumn::make('revision'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWorkorderhistories::route('/'),
            'create' => Pages\CreateWorkorderhistory::route('/create'),
            'edit' => Pages\EditWorkorderhistory::route('/{record}/edit'),
            'view' => Pages\ViewWorkorderhistory::route('/{record}'),            
        ];
    }    
}
