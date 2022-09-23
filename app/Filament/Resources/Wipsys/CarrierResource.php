<?php

namespace App\Filament\Resources\Wipsys;

use App\Filament\Resources\Wipsys\CarrierResource\Pages;
use App\Filament\Resources\Wipsys\CarrierResource\RelationManagers;
use App\Models\Wipsys\Carrier;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarrierResource extends Resource
{
    protected static ?string $model = Carrier::class;

    protected static ?string $navigationGroup = 'WipSys Settings';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->maxLength(10),
                Forms\Components\TextInput::make('name')
                    ->maxLength(228),
                Forms\Components\TextInput::make('physical_address')
                    ->maxLength(228),
                Forms\Components\TextInput::make('address_extension')
                    ->maxLength(228),
                Forms\Components\TextInput::make('payment_address')
                    ->maxLength(228),
                Forms\Components\TextInput::make('city')
                    ->maxLength(228),
                Forms\Components\TextInput::make('state')
                    ->maxLength(2),
                Forms\Components\TextInput::make('zip')
                    ->maxLength(10),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(228),
                Forms\Components\TextInput::make('company_phone')
                    ->tel()
                    ->maxLength(13),
                Forms\Components\TextInput::make('fax')
                    ->maxLength(13),
                Forms\Components\Textarea::make('note')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('archive')
                    ->required(),
                Forms\Components\TextInput::make('revision'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('physical_address'),
                Tables\Columns\TextColumn::make('address_extension'),
                Tables\Columns\TextColumn::make('payment_address'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('state'),
                Tables\Columns\TextColumn::make('zip'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('company_phone'),
                Tables\Columns\TextColumn::make('fax'),
                Tables\Columns\TextColumn::make('note'),
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
            'index' => Pages\ListCarriers::route('/'),
            'create' => Pages\CreateCarrier::route('/create'),
            'edit' => Pages\EditCarrier::route('/{record}/edit'),
        ];
    }    
}
