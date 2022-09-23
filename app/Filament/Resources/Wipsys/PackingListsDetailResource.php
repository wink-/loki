<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\PackingListsDetailResource\Pages;
use App\Filament\Resources\Wipsys\PackingListsDetailResource\RelationManagers;
use App\Models\Wipsys\PackingListsDetail;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackingListsDetailResource extends Resource
{
    protected static ?string $model = PackingListsDetail::class;

    protected static ?string $navigationGroup = 'WipSys Settings';    

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('packing_list_number')
                    ->required(),
                Forms\Components\TextInput::make('tag_number')
                    ->required(),
                Forms\Components\TextInput::make('work_order_number')
                    ->required(),
                Forms\Components\TextInput::make('part_id'),
                Forms\Components\TextInput::make('part_number')
                    ->maxLength(228),
                Forms\Components\TextInput::make('customer_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('destination_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('process_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('method_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('customer_packing_list')
                    ->maxLength(15),
                Forms\Components\TextInput::make('customer_purchase_order')
                    ->maxLength(15),
                Forms\Components\TextInput::make('certification_number'),
                Forms\Components\Toggle::make('certify'),
                Forms\Components\TextInput::make('tag_quantity'),
                Forms\Components\TextInput::make('tag_quantity_shipped'),
                Forms\Components\TextInput::make('quantity'),
                Forms\Components\TextInput::make('shipped_amount'),
                Forms\Components\DateTimePicker::make('packing_list_date'),
                Forms\Components\DateTimePicker::make('date_received'),
                Forms\Components\TextInput::make('session_id')
                    ->maxLength(228),
                Forms\Components\Toggle::make('archive')
                    ->required(),
                Forms\Components\TextInput::make('revision')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('packing_list_number'),
                Tables\Columns\TextColumn::make('tag_number'),
                Tables\Columns\TextColumn::make('work_order_number'),
                Tables\Columns\TextColumn::make('part_id'),
                Tables\Columns\TextColumn::make('part_number'),
                Tables\Columns\TextColumn::make('customer_code'),
                Tables\Columns\TextColumn::make('destination_code'),
                Tables\Columns\TextColumn::make('process_code'),
                Tables\Columns\TextColumn::make('method_code'),
                Tables\Columns\TextColumn::make('customer_packing_list'),
                Tables\Columns\TextColumn::make('customer_purchase_order'),
                Tables\Columns\TextColumn::make('certification_number'),
                Tables\Columns\BooleanColumn::make('certify'),
                Tables\Columns\TextColumn::make('tag_quantity'),
                Tables\Columns\TextColumn::make('tag_quantity_shipped'),
                Tables\Columns\TextColumn::make('quantity'),
                Tables\Columns\TextColumn::make('shipped_amount'),
                Tables\Columns\TextColumn::make('packing_list_date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('date_received')
                    ->dateTime(),
                // Tables\Columns\TextColumn::make('session_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListPackingListsDetails::route('/'),
            'create' => Pages\CreatePackingListsDetail::route('/create'),
            'edit' => Pages\EditPackingListsDetail::route('/{record}/edit'),
            'view' => Pages\ViewPackingListsDetail::route('/{record}'),
        ];
    }    
}
