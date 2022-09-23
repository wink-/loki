<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\PackingListResource\Pages;
use App\Filament\Resources\Wipsys\PackingListResource\RelationManagers;
use App\Models\Wipsys\PackingList;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackingListResource extends Resource
{
    protected static ?string $model = PackingList::class;

    protected static ?string $navigationGroup = 'WipSys Settings';    

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number'),
                Forms\Components\DateTimePicker::make('date'),
                Forms\Components\TextInput::make('employee_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('user_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('customer_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('destination_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('carrier_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('freight_code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('customer_purchase_order')
                    ->maxLength(228),
                Forms\Components\Toggle::make('cod')
                    ->required(),
                Forms\Components\DateTimePicker::make('date_received'),
                Forms\Components\Toggle::make('printed'),
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
                Tables\Columns\TextColumn::make('number'),
                Tables\Columns\TextColumn::make('date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('employee_code'),
                Tables\Columns\TextColumn::make('user_code'),
                Tables\Columns\TextColumn::make('customer_code'),
                Tables\Columns\TextColumn::make('destination_code'),
                Tables\Columns\TextColumn::make('carrier_code'),
                Tables\Columns\TextColumn::make('freight_code'),
                Tables\Columns\TextColumn::make('customer_purchase_order'),
                Tables\Columns\BooleanColumn::make('cod'),
                Tables\Columns\TextColumn::make('date_received')
                    ->dateTime(),
                Tables\Columns\BooleanColumn::make('printed'),
                Tables\Columns\TextColumn::make('session_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\BooleanColumn::make('archive'),
                Tables\Columns\TextColumn::make('revision'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPackingLists::route('/'),
            'create' => Pages\CreatePackingList::route('/create'),
            'edit' => Pages\EditPackingList::route('/{record}/edit'),
        ];
    }    
}
