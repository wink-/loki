<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\UpsResource\Pages;
use App\Filament\Resources\Wipsys\UpsResource\RelationManagers;
use App\Models\Wipsys\Ups;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UpsResource extends Resource
{
    protected static ?string $model = Ups::class;

    protected static ?string $navigationGroup = 'WipSys';    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tracking_number')
                    ->maxLength(220),
                Forms\Components\TextInput::make('receiver_name')
                    ->maxLength(220),
                Forms\Components\TextInput::make('shipment_process_timestamp')
                    ->maxLength(220),
                Forms\Components\TextInput::make('service_type')
                    ->maxLength(220),
                Forms\Components\TextInput::make('weight'),
                Forms\Components\TextInput::make('ref_1')
                    ->maxLength(220),
                Forms\Components\TextInput::make('ref_2')
                    ->maxLength(220),
                Forms\Components\TextInput::make('ref_3')
                    ->maxLength(220),
                Forms\Components\TextInput::make('ref_4')
                    ->maxLength(220),
                Forms\Components\TextInput::make('ref_5')
                    ->maxLength(220),
                Forms\Components\TextInput::make('revision'),
                Forms\Components\Toggle::make('archive')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tracking_number'),
                Tables\Columns\TextColumn::make('receiver_name'),
                Tables\Columns\TextColumn::make('shipment_process_timestamp'),
                Tables\Columns\TextColumn::make('service_type'),
                Tables\Columns\TextColumn::make('weight'),
                Tables\Columns\TextColumn::make('ref_1'),
                Tables\Columns\TextColumn::make('ref_2'),
                Tables\Columns\TextColumn::make('ref_3'),
                Tables\Columns\TextColumn::make('ref_4'),
                Tables\Columns\TextColumn::make('ref_5'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('revision'),
                Tables\Columns\BooleanColumn::make('archive'),
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
            'index' => Pages\ListUps::route('/'),
            'create' => Pages\CreateUps::route('/create'),
            'edit' => Pages\EditUps::route('/{record}/edit'),
        ];
    }    
}
