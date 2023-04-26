<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\WorkorderResource\Pages;
use App\Filament\Resources\Wipsys\WorkorderResource\RelationManagers;
use App\Models\Wipsys\Workorder;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkorderResource extends Resource
{
    protected static ?string $model = Workorder::class;

    protected static ?string $navigationGroup = 'WipSys';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number'),
                Forms\Components\TextInput::make('customer_code')
                    ->maxLength(10),
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
                Forms\Components\Toggle::make('completed'),
                Forms\Components\Toggle::make('shipped'),
                Forms\Components\Toggle::make('cod'),
                Forms\Components\Toggle::make('invoiced'),
                Forms\Components\Textarea::make('note')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('printed'),
                Forms\Components\TextInput::make('image_count'),
                Forms\Components\TextInput::make('session_id')
                    ->maxLength(228),
                Forms\Components\Toggle::make('archive'),
                Forms\Components\TextInput::make('revision'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->sortable()
                    ->searchable()
                    ->label('Work Order'),
                Tables\Columns\TextColumn::make('customer_code')
                    ->sortable()
                    ->searchable()
                    ->label('Customer'),
                //Tables\Columns\TextColumn::make('part_id'),
                Tables\Columns\TextColumn::make('part_number')
                    ->sortable()
                    ->searchable()
                    ->label('Part'),
                Tables\Columns\TextColumn::make('process_code')
                    ->sortable()
                    ->searchable()
                    ->label('Process'),
                Tables\Columns\TextColumn::make('quantity')
                    ->sortable()
                    ->searchable()
                    ->label('Qty'),
                Tables\Columns\TextColumn::make('price')
                    ->sortable()
                    ->searchable()
                    ->label('Price'),
                Tables\Columns\TextColumn::make('price_code')->label('Price Code'),
                Tables\Columns\TextColumn::make('customer_purchase_order')
                    ->sortable()
                    ->searchable()
                    ->label('Customer PO'),
                Tables\Columns\TextColumn::make('customer_packing_list')
                    ->sortable()
                    ->searchable()
                    ->label('Customer PL'),
                Tables\Columns\IconColumn::make('rework')
                    ->boolean()
                    ->sortable()
                    ->label('Rework'),
                //Tables\Columns\TextColumn::make('unit_code'),
                Tables\Columns\TextColumn::make('quantity_shipped'),
                Tables\Columns\TextColumn::make('our_last_packing_list'),
                //Tables\Columns\TextColumn::make('destination_code'),
                //Tables\Columns\TextColumn::make('carrier_code'),
                //Tables\Columns\TextColumn::make('freight_code'),
                Tables\Columns\TextColumn::make('date_shipped')
                    ->date()
                    ->sortable()
                    ->label('Shipped'),
                Tables\Columns\TextColumn::make('shipped_amount'),
                Tables\Columns\TextColumn::make('inventory_amount'),
                //Tables\Columns\TextColumn::make('invoice_number'),
                //Tables\Columns\TextColumn::make('invoice_date')->dateTime(),
                Tables\Columns\TextColumn::make('invoice_amount'),
                //Tables\Columns\TextColumn::make('priority'),
                //Tables\Columns\IconColumn::make('hot')->boolean(),
                //Tables\Columns\IconColumn::make('started')->boolean(),
                //Tables\Columns\IconColumn::make('completed')->boolean(),
                //Tables\Columns\IconColumn::make('shipped')->boolean(),
                //Tables\Columns\IconColumn::make('cod')->boolean(),
                //Tables\Columns\IconColumn::make('invoiced')->boolean(),
                //Tables\Columns\TextColumn::make('note'),
                //Tables\Columns\IconColumn::make('printed')->boolean(),
                //Tables\Columns\TextColumn::make('image_count'),
                //Tables\Columns\TextColumn::make('session_id'),
                Tables\Columns\TextColumn::make('date_received'),
                Tables\Columns\TextColumn::make('date_required')->date(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
                //Tables\Columns\IconColumn::make('archive')->boolean(),
                //Tables\Columns\TextColumn::make('revision'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListWorkorders::route('/'),
            'create' => Pages\CreateWorkorder::route('/create'),
            'edit' => Pages\EditWorkorder::route('/{record}/edit'),
        ];
    }

}
